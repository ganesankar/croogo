<?php
namespace Croogo\Install\Test\TestCase\Model;

use Croogo\TestSuite\CroogoTestCase;
use Migrations\Lib\MigrationVersion;
use Users\Model\User;

class InstallTest extends CroogoTestCase
{

    public $fixtures = [
        'plugin.Croogo/Users.Aro',
        'plugin.Croogo/Install.InstallUser',
        'plugin.Croogo/Install.InstallRole',
    ];

    public function setUp()
    {
        parent::setUp();

        Plugin::load('Install');
        $this->Install = ClassRegistry::init('Install.Install');
    }

    public function testRunMigrationsOk()
    {
        $croogoPlugin = $this->getMock('CroogoPlugin');
        $croogoPlugin->expects($this->any())
                ->method('migrate')
                ->will($this->returnValue(true));
        $this->_runProtectedMethod('_setCroogoPlugin', [$croogoPlugin]);
        $this->assertEquals(true, $this->Install->runMigrations('Users'));
    }

    public function testRunMigrationsFailed()
    {
        $croogoPlugin = $this->getMock('CroogoPlugin');
        $croogoPlugin->expects($this->any())
                ->method('migrate')
                ->will($this->returnValue(false));
        $this->_runProtectedMethod('_setCroogoPlugin', [$croogoPlugin]);
        $this->assertEquals(false, $this->Install->runMigrations('Users'));
    }

    public function testAddAdminUserOk()
    {
        $user = ['User' => [
            'username' => 'admin',
            'password' => '123456',
        ]];
        $this->Install->addAdminUser($user);
        $User = ClassRegistry::init('Users.User');

        $count = $User->find('count');
        $this->assertEqual($count, 1);

        $saved = $User->findByUsername('admin');
        $expected = AuthComponent::password($user['User']['password']);
        $this->assertEqual($expected, $saved['User']['password'], 'Password mismatch');
    }

    public function testAddAdminUserBadPassword()
    {
        $user = ['User' => [
            'username' => 'admin',
            'password' => '1234',
        ]];
        $this->Install->addAdminUser($user);
        $count = ClassRegistry::init('Users.User')->find('count');
        $this->assertEqual($count, 0);
    }

    protected function _runProtectedMethod($name, $args = [])
    {
        $this->skipIf(version_compare(PHP_VERSION, '5.3.0', '<'), 'PHP >= 5.3.0 required to run this test.');
        $method = new ReflectionMethod(get_class($this->Install), $name);
        $method->setAccessible(true);
        return $method->invokeArgs($this->Install, $args);
    }
}
