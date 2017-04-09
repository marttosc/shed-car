<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanistsTable extends Migration
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
        $this->schema->table('mechanists', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->index('user_id');
            $collection->boolean('is_owner')->default(false);
            $collection->string('name');
            $collection->string('address')->nullable();
            $collection->string('number')->nullable();
            $collection->string('complement')->nullable();
            $collection->string('zipcode')->nullable();
            $collection->string('city')->nullable();
            $collection->string('state')->nullable();
            $collection->json('location')->nullable();
            $collection->string('telephone')->nullable();
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
        $this->schema->drop('mechanists');
    }
}
