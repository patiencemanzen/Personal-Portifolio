<?php

    namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

    class GalleryController extends Controller {
        /**
         * List all the galleries
         *
         * @return View
         */
        public function index() {
            return view('gallery.index');
        }

        /**
         * Create new gallery
         *
         * @param Request $request
         * @return View
         */
        public function store(Request $request) {
            return view('gallery.create');
        }
    }
