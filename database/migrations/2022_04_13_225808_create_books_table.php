<?php

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            
            $table->string('title', 255);
            $table->string('author', 255);
            $table->text('description')->nullable();
            $table->date('released_at');
            $table->string('cover_image', 255)->nullable();
            $table->integer('pages');
            $table->string('language_code', 3)->default('hu');
            $table->string('isbn', 13)->unique();
            $table->integer('in_stock');
            
            $table->timestamps();
        });
        Schema::create('book_genre', function (Blueprint $table) {
            $table->primary(['book_id', 'genre_id']);
            
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Genre::class);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('book_genre');
    }
};
