<?php
use Migrations\AbstractSeed;

/**
 * I18n seed.
 */
class I18nSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '1',
                'field' => 'title',
                'content' => 'Halo Dunia',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '2',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '1',
                'field' => 'excerpt',
                'content' => '',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '3',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '1',
                'field' => 'body',
                'content' => '<p>Selamat Datang di Croogo. Ini adalah tulisan pertama anda. Anda dapat mengedit atau menghapusnya dari panel admin.</p>',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '4',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '2',
                'field' => 'title',
                'content' => 'Tentang',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '5',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '2',
                'field' => 'excerpt',
                'content' => '',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '6',
                'locale' => 'id_ID',
                'model' => 'Nodes',
                'foreign_key' => '2',
                'field' => 'body',
                'content' => '<p>Ini merupakan contoh halaman Croogo, Anda dapat menyunting ini untuk menaruh informasi tentang diri Anda atau situs Anda.</p>',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '7',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '8',
                'field' => 'title',
                'content' => 'Tentang',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '8',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '8',
                'field' => 'description',
                'content' => '',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '9',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '7',
                'field' => 'title',
                'content' => 'Depan',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '10',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '7',
                'field' => 'description',
                'content' => '',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '11',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '15',
                'field' => 'title',
                'content' => 'Kontak',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '12',
                'locale' => 'id_ID',
                'model' => 'Links',
                'foreign_key' => '15',
                'field' => 'description',
                'content' => '',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '13',
                'locale' => 'id_ID',
                'model' => 'Blocks',
                'foreign_key' => '7',
                'field' => 'title',
                'content' => 'Kategori',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '14',
                'locale' => 'id_ID',
                'model' => 'Blocks',
                'foreign_key' => '7',
                'field' => 'body',
                'content' => '[vocabulary:categories type="blog"]',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '15',
                'locale' => 'id_ID',
                'model' => 'Blocks',
                'foreign_key' => '3',
                'field' => 'title',
                'content' => 'Tentang',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '16',
                'locale' => 'id_ID',
                'model' => 'Blocks',
                'foreign_key' => '3',
                'field' => 'body',
                'content' => 'Ini adalah isi dari blok Anda. Dapat dimodifikasi di panel admin.',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
            [
                'id' => '17',
                'locale' => 'id_ID',
                'model' => 'Blocks',
                'foreign_key' => '9',
                'field' => 'title',
                'content' => 'Tulisan Baru',
                'updated' => NULL,
                'updated_by' => NULL,
                'created' => NULL,
                'created_by' => NULL,
            ],
        ];

        $table = $this->table('i18n');
        $table->insert($data)->save();
    }
}