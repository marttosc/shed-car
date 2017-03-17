<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->table('reviews', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->index('user_id')->index();
            $collection->index('mechanist_id')->index();
            $collection->integer('review')->index();
            $collection->longText('note');
            $collection->timestamps();
            $collection->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('reviews');
    }
}
