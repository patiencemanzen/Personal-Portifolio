<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Gallery extends Model {
        use HasFactory;

        /**
         * allery belongs to user
         *
         *@return BelongsTo
         */
        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
