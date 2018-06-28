<?php
use Migrations\AbstractMigration;

class CreateBookmarksTags extends AbstractMigration
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
        $table = $this->table('bookmarks_tags');
        $table->addColumn('bookmark_id', 'integer', [
            'limit' => 11,
            'null'  => false,
        ])->addPrimaryKey('bookmark_id')
          ->addIndex(['bookmark_id'])->addForeignKey('bookmark_id ', 'bookmarks', 'id');
        $table->addColumn('tag_id', 'integer', [
            'limit' => 11,
            'null'  => false,
        ])->addPrimaryKey('tag_id')
          ->addIndex(['tag_id'])->addForeignKey('tag_id', 'tags', 'id');
        $table->create();
    }
}
