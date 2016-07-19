<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class eloquentController extends Controller
{
    public function index()
    {
        //$user = User::all();
        //$user = User::find(1);
        //$user = User::find([1, 2, 3]);
        //$user = User::first();
        //$user = User::where('id','=','3')->get();
        //$user = User::where('id','=','3')->get(['name']);
        //$user = User::pluck('name');
        //$user = User::lists('name');
        //$user = User::find(1)->toSql();

        //$user = User::all()->first();
        //$user = User::find([1, 2, 3])->first();

        /* usar or
        $user = User::where('name', 'LIKE', '%Carolyne Reichel%')
            ->orWhere('name', '=', 'Mr. Isac Legros')
            ->get();
        */

        /* usar and
         $user = User::where('name', 'LIKE', '%Carolyne Reichel%')
         ->Where('id', '=', '1')
        ->get();
        */

         /* usar sentencias SQL
        $user = User::whereRaw('name = ? AND email LIKE ?',
            [
                'Walter Okuneva',
                'ukuhlman@example.net'
            ]
            )
            ->get();
         */
        /*  whereBetween('year', array('2000', '2010')) */
        /*  whereIn('campo', $array) */
        /*  whereNotIn('campo', $array) */
        /*  whereNull('campo') */
        /*  whereNotNull('campo') */
        /*  ->orderBy('campo') */
        /*  ->orderBy('year', 'desc')*/
        /*  take( int ) === limit en mysql o top en SqlServer */
        /*  ->skip( int ) === offset  de tanto en tanto */



        /* Para utilizar varios where con un closure
           $user = User::whereNested(function($query)
            {
                $query->where('id', '>', 10);
                $query->where('id', '<', 20);
            })
            ->get();

         */
        // orWhereNested()

        // /* where mágico se puede agregar el nombre del campo despues del where con camelCase

            $user = User::whereId(3)->get();
        //*/
        

        // https://daylerees.com/codebright-eloquent-queries/

        //dd($user);

        return 'en eloquentController';
    }

}
