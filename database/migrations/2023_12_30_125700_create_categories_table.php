<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\HasPermission;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['article', 'news']);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        $permissions = [
            'view categories' => 'نمایش دسته بندی ها',
            'create categories' => 'ایجاد دسته بندی ها',
            'edit categories' => 'ویرایش دسته بندی ها',
            'حذف categories' => 'حذف دسته بندی ها',
        ];

        $permissionNames = $this->createPermissions($permissions);

        //assign permissions to role
        $this->assignPermissions($permissionNames, 'admin');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
