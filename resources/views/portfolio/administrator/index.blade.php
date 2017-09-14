@extends('portfolio.administrator.layout')

@section('content')

<!-- Form::open(array('action' => array('Controller@method', $user->id))) -->
{!! Form::open(array('action' => 'PortfolioAdminController@update')) !!}
<div id="form">
    <div class="formSection" id="mainInfo">

        <h1>Main info</h1>
        
        <div class="rowGroup">

            <div class="languageGroup">

                <input type="text" name="firstNameRu" id="firstNameRu" placeholder="Name (RU)" value="{{ $mainInfo[1]['firstName'] }}">
                <input type="text" name="lastNameRu" id="lastNameRu" placeholder="Family name (RU)" value="{{ $mainInfo[1]['lastName'] }}">
                <input type="text" name="professionRu" id="professionRu" placeholder="Subtitle for name (RU)" value="{{ $mainInfo[1]['profession'] }}">
            </div>

            <div class="languageGroup">

                <input type="text" name="firstNameEn" id="firstNameEn" placeholder="Name (EN)" value="{{ $mainInfo[0]['firstName'] }}">
                <input type="text" name="lastNameEn" id="lastNameEn" placeholder="Family name (EN)" value="{{ $mainInfo[0]['lastName'] }}">
                <input type="text" name="professionEn" id="professionEn" placeholder="Subtitle for name (EN)" value="{{ $mainInfo[0]['profession'] }}">
            </div>
        </div>
    </div>



    <div class="formSection" id="skills">

        <h1>Skills</h1>
        <div class="formGroup" id="skillLineToClone">
            <input type="hidden" name="skillId[]" value="">

            <input type="text" name="skillNameRu[]" placeholder="Skill" value="">
            <input type="text" name="skillNameEn[]" placeholder="Skill" value="">

            <input type="range" name="skillValue[]" min="0" max="100" step="1">
        </div>

        <input type="hidden" name="skillTrashList" class="trashList" value="">
        
        <div class="areaToPast" id="skillLineAreaToPast">
            @foreach ($skills as $skill)
            <div>
                <div class="formGroup">
                    <input type="hidden" name="skillId[]" id="sk" value="{{ $skill['id'] }}">

                    <input type="text" name="skillNameRu[]" placeholder="Skill" value="{{ $skill['title_ru'] }}">
                    <input type="text" name="skillNameEn[]" placeholder="Skill" value="{{ $skill['title_en'] }}">

                    <input type="range" name="skillValue[]" min="0" max="100" step="1" value="{{ $skill['value'] }}">
                </div>
                
                <a class="button remove" onclick="removeLine()">X</a>
            </div>
            @endforeach
        </div>

        <div class="formButtons">
            <a class="button addButton" id="addSkill" onclick="addInputRowGroup('skillLineToClone','skillLineAreaToPast')">Add</a>
        </div>
    </div>



    <div class="formSection" id="resume">

        <h1>Resume</h1>
        <div class="commonInfo">

            <input type="file" name="resumeFile">
        </div>
        
        <div class="rowGroup" id="resumeLineToClone">
            
            <input type="hidden" name="resumeId[]" value="">

            <div class="languageGroup">

                <input type="text" name="resumeTitleRu[]" placeholder="Title" value="">
                <textarea rows="3" name="resumeTextRu[]"></textarea>
            </div>

            <div class="languageGroup">

                <input type="text" name="resumeTitleEn[]" placeholder="Title" value="">
                <textarea rows="3" name="resumeTextEn[]"></textarea>
            </div>
        </div>
        
        <input type="hidden" name="resumeTrashList" class="trashList" value="">

        <div class="areaToPast" id="resumeAreaToPast">
            @foreach($resumes as $resume)
            <div>
                <div class="rowGroup">
                    
                    <input type="hidden" name="resumeId[]" value="{{ $resume['id'] }}">

                    <div class="languageGroup">

                        <input type="text" name="resumeTitleRu[]" placeholder="Title" value="{{ $resume['title_ru'] }}">
                        <textarea rows="3" name="resumeTextRu[]">{{ $resume['text_ru'] }}</textarea>
                    </div>

                    <div class="languageGroup">

                        <input type="text" name="resumeTitleEn[]" placeholder="Title" value="{{ $resume['title_en'] }}">
                        <textarea rows="3" name="resumeTextEn[]">{{ $resume['text_en'] }}</textarea>
                    </div>
                </div>
                
                <a class="button remove" onclick="removeLine()">X</a>
            </div>
            @endforeach
        </div>

        <div class="formButtons">
            <a class="button addButton" id="addResumeRow" onclick="addInputRowGroup('resumeLineToClone','resumeAreaToPast')">Add</a>
        </div>
    </div>



    <div class="formSection" id="story">

        <h1>Story</h1>

        <div class="rowGroup" id="storyLineToClone">
            
            <input type="hidden" name="storyId[]" value="">

            <div class="commonInfo">
                <input type="text" name="storyYear[]" placeholder="Year" value="">
            </div>

            <div class="languageGroup">

                <input type="text" name="storyTitleRu[]" placeholder="Title" value="">
                <input type="text" name="storyPositionRu[]" placeholder="Position" value="">
                <textarea rows="3" name="storyTextRu[]"></textarea>
            </div>

            <div class="languageGroup">

                <input type="text" name="storyTitleEn[]" placeholder="Title" value="">
                <input type="text" name="storyPositionEn[]" placeholder="Position" value="">
                <textarea rows="3" name="storyTextEn[]"></textarea>
            </div>
        </div>
        
        <input type="hidden" name="storyTrashList" class="trashList" value="">

        <div class="areaToPast" id="storyAreaToPast">
            
            @foreach ($stories as $story)
            <div>
                <div class="rowGroup" id="storyLineToClone">

                    <input type="hidden" name="storyId[]" value="{{ $story['id'] }}">

                    <div class="commonInfo">
                        <input type="text" name="storyYear[]" placeholder="Year" value="{{ $story['year'] }}">
                    </div>

                    <div class="languageGroup">

                        <input type="text" name="storyTitleRu[]" placeholder="Title" value="{{ $story['title_ru'] }}">
                        <input type="text" name="storyPositionRu[]" placeholder="Position" value="{{ $story['position_ru'] }}">
                        <textarea rows="3" name="storyTextRu[]">{{ $story['text_ru'] }}</textarea>
                    </div>

                    <div class="languageGroup">

                        <input type="text" name="storyTitleEn[]" placeholder="Title" value="{{ $story['title_en'] }}">
                        <input type="text" name="storyPositionEn[]" placeholder="Position" value="{{ $story['position_en'] }}">
                        <textarea rows="3" name="storyTextEn[]">{{ $story['text_en'] }}</textarea>
                    </div>
                </div>
                
                <a class="button remove" onclick="removeLine()">X</a>
            </div>
            @endforeach
        </div>

        <div class="formButtons">
            <a class="button addButton" id="addStory" onclick="addInputRowGroup('storyLineToClone','storyAreaToPast')">Add</a>
        </div>
    </div>



    <div class="formSection" id="portfolio">

        <h1>Portfolio</h1>

        <div class="rowGroup" id="projectLineToClone">
            
            <input type="hidden" name="portfolioId[]" value="">

            <div class="commonInfo">

                <input type="text" name="portfolioLink[]" placeholder="Link" value="">
                <input type="file" name="portfolioImage[]">
            </div>

            <div class="languageGroup">

                <input type="text" name="portfolioTitleRu[]" placeholder="Title" value="">
                <textarea rows="3" name="portfolioTextRu[]"></textarea>
            </div>

            <div class="languageGroup">

                <input type="text" name="portfolioTitleEn[]" placeholder="Title" value="">
                <textarea rows="3" name="portfolioTextEn[]"></textarea>
            </div>
        </div>
        
        <input type="hidden" name="portfolioTrashList" class="trashList" value="">

        <div class="areaToPast" id="projectAreaToPast">
            @foreach($portfolio as $project)
            <div>
                <div class="rowGroup">
                    
                    <input type="hidden" name="portfolioId[]" value="{{ $project['id'] }}">

                    <div class="commonInfo">

                        <input type="text" name="portfolioLink[]" placeholder="Link" value="{{ $project['link'] }}">
                        <input type="file" name="portfolioImage[]">
                    </div>

                    <div class="languageGroup">

                        <input type="text" name="portfolioTitleRu[]" placeholder="Title" value="{{ $project['title_ru'] }}">
                        <textarea rows="3" name="portfolioTextRu[]">{{ $project['text_ru'] }}</textarea>
                    </div>

                    <div class="languageGroup">

                        <input type="text" name="portfolioTitleEn[]" placeholder="Title" value="{{ $project['title_en'] }}">
                        <textarea rows="3" name="portfolioTextEn[]">{{ $project['text_en'] }}</textarea>
                    </div>
                </div>
                
                <a class="button remove" onclick="removeLine()">X</a>
            </div>
            @endforeach
        </div>

        <div class="formButtons">
            <a class="button addButton" id="addProject" onclick="addInputRowGroup('projectLineToClone','projectAreaToPast')">Add</a>
        </div>
    </div>



    <div class="formSection" id="contact">

        <h1>Contact info</h1>

        <div>

            <div>
                <div class="formGroup" id="phoneLineToClone">
                    <input type="hidden" name="contactPhoneId[]" value="">
                    <input type="text" name="contactPhone[]" placeholder="Phone" value="">
                </div>

                <input type="hidden" name="contactPhoneTrashList" class="trashList" value="">

                <div class="formGroup areaToPast" id="phoneAreaToPast">
                    @foreach($phones as $phone)
                    <div>
                        <div class="formGroup">
                            <input type="hidden" name="contactPhoneId[]" value="{{ $phone['id'] }}">
                            <input type="text" name="contactPhone[]" placeholder="Phone" value="{{ $phone['phone'] }}">
                        </div>

                        <a class="button remove" onclick="removeLine()">X</a>
                    </div>
                    @endforeach
                </div>

                <div class="formButtons">
                    <a class="button addButton" id="addPhone" onclick="addInputRowGroup('phoneLineToClone','phoneAreaToPast')">Add</a>
                </div>
            </div>
            
            
            <div>
                <div class="formGroup" id="mailLineToClone">
                    <input type="hidden" name="contactMailId[]" value="">
                    <input type="text" name="contactMail[]" placeholder="Mail" value="">
                </div>

                <input type="hidden" name="contactMailTrashList" class="trashList" value="">

                <div class="formGroup areaToPast" id="mailAreaToPast">
                    @foreach($mails as $mail)
                    <div>
                        <div class="formGroup">
                            <input type="hidden" name="contactMailId[]" value="{{ $mail['id'] }}">
                            <input type="text" name="contactMail[]" placeholder="Mail" value="{{ $mail['mail'] }}">
                        </div>

                        <a class="button remove" onclick="removeLine()">X</a>
                    </div>
                    @endforeach
                </div>

                <div class="formButtons">
                    <a class="button addButton" id="addMail" onclick="addInputRowGroup('mailLineToClone','mailAreaToPast')">Add</a>
                </div>
            </div>
            
            
            
            <div>
                <div class="formGroup" id="socialNetworkToClone">
                    <input type="hidden" name="socialNetworkId[]" value="">
                    <input type="text" name="socialNetworkLink[]" placeholder="Social network" value="">
                    <input type="file" name="socialNetworkImage[]">
                </div>

                <input type="hidden" name="socialNetworkTrashList" class="trashList" value="">

                <div class="formGroup areaToPast" id="socialNetworkAreaToPast">
                    @foreach($socialNetworks as $socialNetwork)
                    <div>
                        <div class="formGroup">
                            <input type="hidden" name="socialNetworkId[]" value="{{ $socialNetwork['id'] }}">
                            <input type="text" name="socialNetworkLink[]" placeholder="Social network link" value="{{ $socialNetwork['link'] }}">
                            <input type="file" name="socialNetworkImage[]">
                        </div>
                        <a class="button remove" onclick="removeLine()">X</a>
                    </div>
                    @endforeach
                </div>

                <div class="formButtons">
                    <a class="button addButton" id="addMail" onclick="addInputRowGroup('socialNetworkToClone','socialNetworkAreaToPast')">Add</a>
                </div>
            </div>
        </div>
    </div>

    <div class="formSection" id="saveLine">

        <input type="submit" class="button" value="Save">
    </div>
</div>
{!! Form::close() !!}

@endsection