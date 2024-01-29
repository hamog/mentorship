<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

        $admin = Role::where('name', 'admin')->first();

        $viewPermission = Permission::create([
            'name' => 'view categories',
            'label' => 'نمایش دسته بندی ها'
        ]);
        $createPermission = Permission::create([
            'name' => 'create categories',
            'label' => 'ایجاد دسته بندی ها'
        ]);
        $updatePermission = Permission::create([
            'name' => 'update categories',
            'label' => 'ویرایش دسته بندی ها'
        ]);
        $deletePermission = Permission::create([
            'name' => 'delete categories',
            'label' => 'حذف دسته بندی ها'
        ]);

        $admin->givePermissionTo($viewPermission);
        $admin->givePermissionTo($createPermission);
        $admin->givePermissionTo($updatePermission);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
