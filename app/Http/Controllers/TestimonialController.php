<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Testimonial;


class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return response()->json([
            'success' => true,
            'message' => 'successfully fetched testimonials',
            'data' => $testimonials
        ]);
    }
}
