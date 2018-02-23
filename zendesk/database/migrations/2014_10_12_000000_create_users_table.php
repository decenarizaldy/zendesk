<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->text('id');
            $table->string('url')->nullable();
            $table->string('time_zone');
            $table->text('phone')->nullable();
            $table->text('shared_phone_number')->nullable();
            $table->text('locale_id')->nullable();
            $table->string('locale')->nullable();
            $table->text('organization_id')->nullable();
            $table->string('role')->nullable();
            $table->boolean('verified')->nullable();
            $table->text('external_id')->nullable();
            $table->text('tags')->nullable();
            $table->string('alias')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('shared')->nullable();
            $table->boolean('shared_agent')->nullable();
            $table->text('last_login_at')->nullable();
            $table->string('two_factor_auth_enabled')->nullable();
            $table->string('signature')->nullable();
            $table->string('details')->nullable();
            $table->string('notes')->nullable();
            $table->string('role_type')->nullable();
            $table->text('custom_role_id')->nullable();
            $table->boolean('moderator')->nullable();
            $table->string('ticket_restriction')->nullable();
            $table->boolean('only_private_comments');
            $table->boolean('restricted_agent')->nullable();
            $table->boolean('suspended')->nullable();
            $table->boolean('chat_only')->nullable();
            $table->text('default_group_id')->nullable();
            
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
