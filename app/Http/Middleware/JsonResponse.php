<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {

        $responseObject = $next($request);
        $response = get_object_vars($responseObject);
        $exception = $response['exception'];
        $message = $exception ? 'Internal server error' : 'Success';
        $data = !$exception ? $responseObject->getContent() : '';


        return response()->json([
                'data' => json_decode($data),
                'message' => $message,
                'success' => empty($exception)
            ],  $responseObject->getStatusCode());
    }
}
