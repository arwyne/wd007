<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function showWelcomePage(){
        $groceries = [
            'fruits' => ['apples', 'orange', 'grapes', 'mango', 'watermelon'],
            'vegetables' => ['carrots', 'potatoes', 'broccoli', 'stringbeans']
        ];
        return view('welcome')->with($groceries);
                                    // with('fruits' => ['apples', 'oranges', 'grapes', 'mango', 'watermelon']);
                                    // with('vegetables' => ['carrots', 'potatoes', 'broccoli', 'string beans']);
        // WITH - looking for key value pair
            // to call $fruits or $fruits[0];
        // COMPACT - stay as is
            // to call $groceries['fruits'][0];

        // return view('welcome', compact('groceries'));

        // $name = "Covid19 Screening Tool";
        // return view('welcome')->with('info',$name);
        // returns a view welcome.blade.php with a variable called $name
        // with method has 2 params, 1st param customized name for the $variable, 2nd param is the variable that we want to pass on the blade.
        //with method only exist in the Laravel Framework

        // return view('welcome', compact('name'));
        // compact method, allows us to pass a variable to a blade. This will create an array from an existing variable given as a string param/arguments to it.
        // compact method is a php function
    }


    /* 
        Activity (May 4)

        Instructions:

        1. Foreach of the method create an array and assign values: 
            for showProfilePage(), create a var called 'info' and assign values below: 
                firstname => "Your firstname",
                lastname => "Your lastname",
                occupation => "Your occupation",
                hobbies => ["swimming", "singing"]

            for showExperiencePage() method, create a var called 'work' and assign values below: 
                "Jollibee (2018-2019), Mcdo (2017-2018)"

            for showSkillSetPage() method, create a var called 'skills' and assign associative array values below: 
                "frontend" => ['HTML', 'CSS', 'Bootsrap', 'JS', 'jQuery', 'ReactJS']
                "backend" => ['PHP', 'MySQL', 'Laravel']
        
        2. Pass there values to your designated views/blad file, you may use either with() method or the compact method.

        3. Push to your gitlab account


    */

    function showProfilePage(){
        $info = ['firstname'=>'Arwyne', 'lastname'=>'De Guzman', 'occupation'=>'Student | Web Developer', 'hobbies'=>['Programming', 'Basketball', 'Hiking', 'Jogging'] ];
        return view('myprofile')->with($info);
    }

    function showWorkExperiencePage(){
        $work = ['Maynilad Water Service Inc. | Project Engineer (2015-2019)', 'Zuitt PH | Student (2020-Present)'];
        return view('workexperience')->with('work', $work);
    }

    function showSkillSetPage(){
        $skills = ['frontend' => ['HTML', 'CSS', 'JS', 'jQuery', 'Bootstrap', 'MDBootstrap', 'Materialize', 'Bulma', 'React JS'],
                    'backend' => ['PHP', 'MariaDB MySQL', 'Laravel Framework', 'MongoDB', 'Node JS', 'Express JS', 'Java', 'GraphQL']
    ];
        return view('skillset')->with($skills);

    }
}
