<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SkillEntries;

class SkillEntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $entries = SkillEntries::join('skills', 'skills_id', '=', 'skills.id')

                                ->join('skills_category','skills_category.category_id','=','skills.category_id')

                                ->join('rating','rating.student_rating','=','skills_entry.student_rating')

                                ->join('staff','staff.id','=','skills_entry.staff_id')

                                ->join('evaluator','evaluator.evaluator_id','=','skills_entry.evaluator_id')
                                
                                ->select('skills_entry.id','skills.skill_title', 'skills_category.category_name','staff.staff_name', 'skills_entry.student_rating','evaluator.evaluator_name','skills_entry.evaluator_rating')
                                //->get();
                                ->orderBy('skills_entry.id','asc')->get();
        // return $entries['skill_title'];

        
        return $entries;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
       // $entries = SkillEntries::find($id);
        $entries = SkillEntries::join('skills', 'skills_id', '=', 'skills.id')

        ->join('skills_category','skills_category.category_id','=','skills.category_id')

        ->join('rating','rating.student_rating','=','skills_entry.student_rating')

        ->join('staff','staff.id','=','skills_entry.staff_id')

        ->join('evaluator','evaluator.evaluator_id','=','skills_entry.evaluator_id')
        
        ->select('skills_entry.id','skills.skill_title', 'skills_category.category_name','staff.staff_name', 'skills_entry.student_rating','evaluator.evaluator_name','skills_entry.evaluator_rating')
        //->get();
        ->orderBy('skills_entry.id','asc')->get();
// return $entries['skill_title'];

      return  $entries = SkillEntries::find($id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
