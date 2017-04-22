<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserAuthenticationFields extends Migration
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
        $this->schema->table('users', function (Blueprint $collection) {
            $collection->dropIndex(['provider', 'provider_id']);
            $collection->dropColumn(['provider', 'provider_id']);

            $collection->string('password')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->table('users', function (Blueprint $collection) {
            $collection->dropColumn('password');

            $collection->string('provider')->index()->after('email');
            $collection->string('provider_id')->index()->after('provider');
        });
    }
}
