<?php
use Migrations\AbstractMigration;

class CreateBookmarks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bookmarks');
        $table->addColumn('user_id', 'integer', [
            'limit' => 11,
            'null'  => false,
        ])->addIndex(['user_id'])->addForeignKey('user_id', 'users', 'id');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit'   => 50,
            'null'    => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null'    => true,
        ]);
        $table->addColumn('url', 'text', [
            'default' => null,
            'null'    => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->create();
    }
}
