<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as IlumRequest;
use Request;

use App\MainInfo;
use App\Skill;
use App\Resume;
use App\Story;
use App\Portfolio;
use App\Phone;
use App\Mail;
use App\SocialNetwork;
use App\File;
use App\Message;

use Auth;

use Carbon\Carbon;

class PortfolioAdminController extends Controller
{
    public function index(){
        //
        if ( Auth::user()->id == 1) {
            //
            $mainInfo = MainInfo::all();
            $skills =   Skill::all();
            $resumes =  Resume::all();
            $stories =  Story::all();
            $portfolio = Portfolio::all();
            $phones =   Phone::all();
            $mails =    Mail::all();
            $socialNetworks = SocialNetwork::all();
            $files = File::all();
            $colMessages = Message::all()->count();

            return view('portfolio.administrator.index', compact('mainInfo', 'skills', 'resumes', 'stories', 'portfolio','phones','mails','socialNetworks','files','colMessages'));
        }
        
        return 'You don\'t have permission to access this page!';
    }
    
    
    
    public function update(IlumRequest $ilum_input){
        //
        $input = Request::all();
        
        $files = $ilum_input->file();
        //dd($files['resumeFile']);
        
        $this->update_main_info( $input );
        $this->update_skill( $input );
        $this->update_resume( $input, $files );
        $this->update_story( $input );
        $this->update_portfolio( $input, $files );
        $this->update_phone( $input );
        $this->update_mail( $input );
        $this->update_social_network( $input, $files );
        
        return redirect('administrator');
    }
    
    
    
    public function upload_file($file){
        //
        $title = $file->getClientOriginalName();
        $path = public_path('img');
        $file->move($path, $title);
        return $title;
    }
    
    public function delete_file($title){
        //
        unlink(public_path('img') . '\\' . $title);
    }
    
    public function update_phone( $input ) {
        //
        if (isset($input['contactPhoneTrashList']) && $input['contactPhoneTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['contactPhoneTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    Phone::find( $id )->delete();
                }
            }
        }
        
        foreach ($input['contactPhoneId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['contactPhone'][$key]) && $input['contactPhone'][$key] != '' ){
                    //Update
                    $phone = Phone::find($id);
                    $phone->phone = $input['contactPhone'][$key];
                    $phone->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $phone->save();
                }
            }
            else {
                if ( isset($input['contactPhone'][$key]) && $input['contactPhone'][$key] != '' ){
                    //Insert
                    $phone = new Phone;
                    $phone->phone = $input['contactPhone'][$key];
                    $phone->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $phone->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $phone->save();
                }
            }
        }
    }
    
    public function update_mail( $input ) {
        //
        if (isset($input['contactMailTrashList']) && $input['contactMailTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['contactMailTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    Mail::find( $id )->delete();
                }
            }
        }
        
        foreach ($input['contactMailId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['contactMail'][$key]) && $input['contactMail'][$key] != '' ){
                    //Update
                    $mail = Mail::find($id);
                    $mail->mail = $input['contactMail'][$key];
                    $mail->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $mail->save();
                }
            }
            else {
                if ( isset($input['contactMail'][$key]) && $input['contactMail'][$key] != '' ){
                    //Insert
                    $mail = new Mail;
                    $mail->mail = $input['contactMail'][$key];
                    $mail->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $mail->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $mail->save();
                }
            }
        }
    }

    public function update_social_network ( $input, $files ) {
        //
        if (isset($input['socialNetworkTrashList']) && $input['socialNetworkTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['socialNetworkTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    $socialNetwork = SocialNetwork::find( $id );
                    $this->delete_file($socialNetwork->icon);
                    $socialNetwork->delete();
                }
            }
        }
        
        foreach ($input['socialNetworkId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['socialNetworkLink'][$key]) && $input['socialNetworkLink'][$key] != '' ){
                    //Update
                    $socialNetwork = SocialNetwork::find($id);
                    $socialNetwork->link = $input['socialNetworkLink'][$key];
                    if (isset($files['socialNetworkImage'][$key])){
                        $this->delete_file($socialNetwork->icon);
                        $socialNetwork->icon = $this->upload_file($files['socialNetworkImage'][$key]);
                    }
                    $socialNetwork->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $socialNetwork->save();
                }
            }
            else {
                if ( isset($input['socialNetworkLink'][$key],$files['socialNetworkImage'][$key]) && $input['socialNetworkLink'][$key] != '' ){
                    //Insert
                    $socialNetwork = new SocialNetwork;
                    $socialNetwork->link = $input['socialNetworkLink'][$key];
                    $socialNetwork->icon = $this->upload_file($files['socialNetworkImage'][$key]);
                    $socialNetwork->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $socialNetwork->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $socialNetwork->save();
                }
            }
        }
    }

    public function update_portfolio( $input, $files ){
        //
        if (isset($input['portfolioTrashList']) && $input['portfolioTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['portfolioTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    $project = Portfolio::find( $id );
                    $this->delete_file($project->img);
                    $project->delete();
                }
            }
        }
        
        foreach ($input['portfolioId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['portfolioTitleRu'][$key], $input['portfolioTextRu'][$key], 
                           $input['portfolioTitleEn'][$key], $input['portfolioTextEn'][$key],
                           $input['portfolioLink'][$key]//, $input['portfolioImage'][$key]
                        ) 
                        && $input['portfolioTitleRu'][$key] != '' && $input['portfolioTextRu'][$key] != '' 
                        && $input['portfolioTitleEn'][$key] != '' && $input['portfolioTextEn'][$key] != ''
                        && $input['portfolioLink'][$key] != '' //&& $input['portfolioImage'][$key] != ''
                    ){
                    //Update
                    $project = Portfolio::find($id);
                    $project->title_ru = $input['portfolioTitleRu'][$key];
                    $project->text_ru = $input['portfolioTextRu'][$key];
                    $project->title_en = $input['portfolioTitleEn'][$key];
                    $project->text_en = $input['portfolioTextEn'][$key];
                    $project->link = $input['portfolioLink'][$key];
                    if (isset($files['portfolioImage'][$key])){
                        $this->delete_file($project->img);
                        $project->img = $this->upload_file($files['portfolioImage'][$key]);
                    }
                    $project->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $project->save();
                }
            }
            else {
                if ( isset($input['portfolioTitleRu'][$key], $input['portfolioTextRu'][$key], 
                           $input['portfolioTitleEn'][$key], $input['portfolioTextEn'][$key],
                           $input['portfolioLink'][$key]//, $input['portfolioImage'][$key],
                        ) 
                        && $input['portfolioTitleRu'][$key] != '' && $input['portfolioTextRu'][$key] != '' 
                        && $input['portfolioTitleEn'][$key] != '' && $input['portfolioTextEn'][$key] != ''
                        && $input['portfolioLink'][$key] != '' //&& $input['portfolioImage'][$key] != ''
                    ){
                    //Insert
                    $project = new Portfolio;
                    $project->title_ru = $input['portfolioTitleRu'][$key];
                    $project->text_ru = $input['portfolioTextRu'][$key];
                    $project->title_en = $input['portfolioTitleEn'][$key];
                    $project->text_en = $input['portfolioTextEn'][$key];
                    $project->link = $input['portfolioLink'][$key];
                    $project->img = $this->upload_file($files['portfolioImage'][$key]);
                    $project->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $project->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $project->save();
                }
            }
        }
    }
    
    public function update_story( $input ){
        //
        if (isset($input['storyTrashList']) && $input['storyTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['storyTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    Story::find( $id )->delete();
                }
            }
        }
        
        foreach ($input['storyId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset( $input['storyTitleRu'][$key], $input['storyPositionRu'][$key], $input['storyTextRu'][$key],
                            $input['storyTitleEn'][$key], $input['storyPositionEn'][$key], $input['storyTextEn'][$key],
                            $input['storyYear'][$key]) 
                        && $input['storyTitleRu'][$key] != ''  && $input['storyPositionRu'][$key] != '' && $input['storyTextRu'][$key] != ''
                        && $input['storyTitleEn'][$key] != ''  && $input['storyPositionEn'][$key] != '' && $input['storyTextEn'][$key] != '' 
                        && $input['storyYear'][$key] != ''
                    ){
                    //Update
                    $story = Story::find($id);
                    $story->title_ru    = $input['storyTitleRu'][$key];
                    $story->position_ru = $input['storyPositionRu'][$key];
                    $story->text_ru     = $input['storyTextRu'][$key];
                    $story->title_en    = $input['storyTitleEn'][$key];
                    $story->position_en = $input['storyPositionEn'][$key];
                    $story->text_en     = $input['storyTextEn'][$key];
                    $story->year        = $input['storyYear'][$key];
                    $story->updated_at  = Carbon::now()->format('Y-m-d H:i:s');
                    $story->save();
                }
            }
            else {
                if ( isset( $input['storyTitleRu'][$key], $input['storyPositionRu'][$key], $input['storyTextRu'][$key],
                            $input['storyTitleEn'][$key], $input['storyPositionEn'][$key], $input['storyTextEn'][$key],
                            $input['storyYear'][$key]) 
                        && $input['storyTitleRu'][$key] != ''  && $input['storyPositionRu'][$key] != '' && $input['storyTextRu'][$key] != ''
                        && $input['storyTitleEn'][$key] != ''  && $input['storyPositionEn'][$key] != '' && $input['storyTextEn'][$key] != '' 
                        && $input['storyYear'][$key] != ''
                    ){
                    //Insert
                    $story = new Story;
                    $story->title_ru    = $input['storyTitleRu'][$key];
                    $story->position_ru = $input['storyPositionRu'][$key];
                    $story->text_ru     = $input['storyTextRu'][$key];
                    $story->title_en    = $input['storyTitleEn'][$key];
                    $story->position_en = $input['storyPositionEn'][$key];
                    $story->text_en     = $input['storyTextEn'][$key];
                    $story->year        = $input['storyYear'][$key];
                    $story->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $story->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $story->save();
                }
            }
        }
    }
    
    public function update_resume( $input, $files ){
        //
        if (isset($input['resumeTrashList']) && $input['resumeTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['resumeTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    Resume::find( $id )->delete();
                }
            }
        }
        
        foreach ($input['resumeId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['resumeTitleRu'][$key],$input['resumeTextRu'][$key],$input['resumeTitleEn'][$key],$input['resumeTextEn'][$key]) 
                        && $input['resumeTitleRu'][$key] != ''  && $input['resumeTextRu'][$key] != '' && $input['resumeTitleEn'][$key] != '' && $input['resumeTextEn'][$key] != ''){
                    //Update
                    $resume = Resume::find($id);
                    $resume->title_ru = $input['resumeTitleRu'][$key];
                    $resume->text_ru = $input['resumeTextRu'][$key];
                    $resume->title_en = $input['resumeTitleEn'][$key];
                    $resume->text_en = $input['resumeTextEn'][$key];
                    $resume->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $resume->save();
                }
            }
            else {
                if ( isset($input['resumeTitleRu'][$key],$input['resumeTextRu'][$key],$input['resumeTitleEn'][$key],$input['resumeTextEn'][$key]) 
                        && $input['resumeTitleRu'][$key] != ''  && $input['resumeTextRu'][$key] != '' && $input['resumeTitleEn'][$key] != '' && $input['resumeTextEn'][$key] != ''){
                    //Insert
                    $resume = new Resume;
                    $resume->title_ru = $input['resumeTitleRu'][$key];
                    $resume->text_ru = $input['resumeTextRu'][$key];
                    $resume->title_en = $input['resumeTitleEn'][$key];
                    $resume->text_en = $input['resumeTextEn'][$key];
                    $resume->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $resume->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $resume->save();
                }
            }
        }
        
        if (isset($files['resumeFile'])){
            $title = $files['resumeFile']->getClientOriginalName();
            $path = public_path('files');

            $is_exist_file = File::select('id','path','title')->where([
                    ['connected_id', (-1)],
                    ['section', 'resume']                    
                ])->first();
            
            if (isset($is_exist_file->id)){
                //update
                $file_to_db = File::find($is_exist_file->id);
                $file_to_db->path = $path;
                $file_to_db->title = $title;
                $file_to_db->save();

                unlink($path . '\\' . $is_exist_file->title);
            } 
            else {
                //insert
                $file_to_db = new File;
                $file_to_db->path = $path;
                $file_to_db->title = $title;
                $file_to_db->section = 'resume';
                $file_to_db->connected_id = (-1);
                $file_to_db->save();
            }

            $files['resumeFile']->move($path, $title);
        }
    }
    
    public function update_skill( $input ){
        //
        if (isset($input['skillTrashList']) && $input['skillTrashList'] != ''){
            //Delete
            $ids = explode(',', $input['skillTrashList']);
            foreach ($ids as $id){
                if ($id != ''){
                    Skill::find( $id )->delete();
                }
            }
        }
        
        foreach ($input['skillId'] as $key => $id){
            if (isset($id) && $id != ''){
                if ( isset($input['skillNameRu'][$key],$input['skillNameEn'][$key],$input['skillValue'][$key]) 
                        && $input['skillNameRu'][$key] != ''  && $input['skillNameEn'][$key] != '' && $input['skillValue'][$key] != ''){
                    //Update
                    $skill = Skill::find($id);
                    $skill->title_ru = $input['skillNameRu'][$key];
                    $skill->title_en = $input['skillNameEn'][$key];
                    $skill->value = $input['skillValue'][$key];
                    $skill->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $skill->save();
                }
            }
            else {
                if ( isset($input['skillNameRu'][$key],$input['skillNameEn'][$key],$input['skillValue'][$key]) 
                        && $input['skillNameRu'][$key] != ''  && $input['skillNameEn'][$key] != '' && $input['skillValue'][$key] != ''){
                    //Insert
                    $skill = new Skill;
                    $skill->title_ru = $input['skillNameRu'][$key];
                    $skill->title_en = $input['skillNameEn'][$key];
                    $skill->value = $input['skillValue'][$key];
                    $skill->created_at = Carbon::now()->format('Y-m-d H:i:s');
                    $skill->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                    $skill->save();
                }
            }
        }
    }
    
    public function update_main_info( $input ){
        //
        $mainInfoEn = MainInfo::where('language', 'en')->first();
        $mainInfoRu = MainInfo::where('language', 'ru')->first();
        
        $mainInfoEn->firstName = $input['firstNameEn'];
        $mainInfoEn->lastName = $input['lastNameEn'];
        $mainInfoEn->profession = $input['professionEn'];
        
        $mainInfoRu->firstName = $input['firstNameRu'];
        $mainInfoRu->lastName = $input['lastNameRu'];
        $mainInfoRu->profession = $input['professionRu'];
        
        $mainInfoEn->save();
        $mainInfoRu->save();
    }
}
