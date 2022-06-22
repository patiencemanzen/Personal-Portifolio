<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

    class Blog extends Model {
        use HasFactory;

        /**
         * Blog has one content
         *
         *@return HasOne
         */
        public function blogContent(): HasOne {
            return $this->hasOne(BlogContent::class);
        }

        /**
         * Blog has one media
         *
         *@return HasOne
         */
        public function blogMedia(): HasOne {
            return $this->hasOne(BlogMedia::class);
        }
    }
