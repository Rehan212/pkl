    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateTagsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('tags', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->String('nama_tag');
                $table->String('slug');
                $table->timestamps();
            });

            Schema::create('artikel_tag', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_artikel');
                $table->unsignedBigInteger('id_tag');
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
            Schema::dropIfExists('tags');
            Schema::dropIfExists('artikel_tag');
        }
    }
