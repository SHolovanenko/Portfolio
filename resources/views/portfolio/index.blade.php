@extends('portfolio.layout')

@section('content')
<div id="parallax" class="parallax">
    
    <div class="parallax__group">
        
        <div id="home" class="parallax__layer parallax__layer--base">
            
            <div id="menu" class="menu">
            
                <ul>
                    <li><a href="#menu">    {{ $commonInfos[0]['value'] }}</a></li>
                    <li><a href="#skills">  {{ $commonInfos[1]['value'] }}</a></li>
                    <li><a href="#firstDot">{{ $commonInfos[2]['value'] }}</a></li>
                    <li><a href="#portfolio">{{ $commonInfos[3]['value'] }}</a></li>
                    <li><a href="#contact"> {{ $commonInfos[4]['value'] }}</a></li>
                </ul>
                <?php 
                    $current_url = URL::current();
                    $lang = explode('/', $current_url);
                    if (strcasecmp($lang[3], 'ru') == 0 ){
                        echo "<a href='/en'><div id='language-panel'>EN</div></a>";
                    }
                    else {
                        echo "<a href='/ru'><div id='language-panel'>RU</div></a>";
                    }
                ?>
            </div>
            
            <div id="present">

                <div id="name">
                    {{ $mainInfo['firstName'] }}
                    <br>            
                    {{ $mainInfo['lastName'] }}
                </div>

                <div class="subtitle">
                    {{ $mainInfo['profession'] }}
                </div>
            </div>
        </div>
        
        <div class="spacer parallax__layer parallax__layer--back">&nbsp;</div>
    </div>



    <div class="parallax__group">
        
        <div id="skills" class="parallax__layer parallax__layer--base">

            <div class="titlePosition">

                <div class="title">{{ $commonInfos[1]['value'] }}</div>

                <div class="subtitle">{{ $commonInfos[12]['value'] }}</div>
            </div>

            <div id="skillContent">

                <div id="listOfSkills">
                    @foreach($skills as $skill)
                    <div class="skillLine">

                        <div class="skillName">{{ $skill['title'] }}</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize" style="width: {{ $skill['value'] }}%;">&nbsp;</div>

                            <div class="scaleValue"><span class="number">{{ $skill['value'] }}</span>%</div>
                        </div>
                    </div>
                    @endforeach
                </div>    
            </div>
        </div>
    </div>



    <div class="parallax__group">
        
        <div class="spacer parallax__layer parallax__layer--base">&nbsp;</div>
        
        <div class="spacer parallax__layer parallax__layer--back">&nbsp;</div>
    </div>
    
    
    
    <div id="history" class="parallax__group">
        
        <div id="resumeLayer" class="parallax__layer parallax__layer--fore">
            
            <div id="resume">
                
                @foreach($resumes as $resume)
                <div class="title">{{ $resume['title'] }}:</div>
                
                <div class="content">
                    {{ $resume['text'] }}
                </div>
                @endforeach     
                
                <div id="downloadResume">
                    <a download href="{{ asset('files/'.$files[0]['title']) }}">{{ $commonInfos[5]['value'] }}</a>
                </div>
                
                <div>&nbsp;</div>
            </div>
        </div>
        
        <div class="parallax__layer parallax__layer--base spacer"></div>
        
        <div id="historyContent" class="parallax__layer parallax__layer--back">
            
            @for ($i = 0; $i < count($stories); $i++)
                <div class="storyLine <?php if (($i+1) == count($stories)) echo 'storyLineLast';?>">
                @if ( ($i+1)%2 == 0 )
                    <div class="storyLeft empty"></div>
                    
                    <div <?php if ($i == 3) echo 'id="firstDot"';?> class="storyDot"></div>
                @endif

                    <div class="<?php echo (($i+1)%2 == 0) ? 'storyRight connectorLineForRight' : 'storyLeft connectorLineForLeft';?> connectorLineHidden connectorLine">

                        <div class="hidden storyContent">

                            <div class="storyDate">
                                {{ $stories[$i]['year'] }}
                            </div>

                            <div class="storyPlace">
                                {{ $stories[$i]['title'] }}
                            </div>

                            <div class="storyPerson">
                                {{ $stories[$i]['position'] }}
                            </div>

                            <div class="storyExplain">
                                {{ $stories[$i]['text'] }}
                            </div>
                        </div>
                    </div>
                
                @if ( ($i+1)%2 != 0 )
                    <div <?php if ($i == 3) echo 'id="firstDot"';?> class="storyDot"></div>

                    <div class="storyRight empty"></div>
                @endif
                </div>
            @endfor
        </div>

        <div id="bgMountain" class="parallax__layer parallax__layer--deep">
            
            <div class="cover">
                
                <div class="title hidden">{{ $commonInfos[2]['value'] }}</div>
            </div>
        </div>
    </div>
    
    
    
    <div id="portfolioLayer" class="parallax__group">
        
        <div id="portfolio" class="parallax__layer parallax__layer--base">
            
            <div class="title">{{ $commonInfos[3]['value'] }}</div>
            
            <div class="subtitle">{{ $commonInfos[8]['value'] }} <a class="showMoreLink" href="{{ url($language . '/projects') }}">{{ $commonInfos[9]['value'] }}</a></div>
            
            <div id="portfolioContent">
                @foreach ($portfolio as $project)
                <a class="portfolioLink" href="{{ $project['link'] }}">
                    <div class="portfolioImage" style="background: url({{ asset('img/'.$project['img']) }}) no-repeat; background-size: cover;">
                        <div class="portfolioProjectInfo">
                            <div class="portfolioProjectTitle">{{ $project['title'] }}</div>
                            <div class="portfolioProjectText">{{ $project['text'] }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        
        <div id="bg_contact_me" class="parallax__layer parallax__layer--back">&nbsp;</div>
    </div>



    <div id="contactLayer" class="parallax__group">
        
        <div id="contact" class="parallax__layer parallax__layer--fore">
            
            <div class="subtitle">{{ $commonInfos[10]['value'] }}</div>
            
            <div id="contactContent">
                
                <div id="headnote">
                    {{ $commonInfos[11]['value'] }}
                    <br><br>
                    @foreach ($mails as $mail)
                        <a href="mailto:{{ $mail['mail'] }}">{{ $mail['mail'] }}</a>
                        <br>
                    @endforeach
                    
                    @foreach ($phones as $phone)
                        <span class="important">{{ $phone['phone'] }}</span>
                        <br>
                    @endforeach
                </div>
                
                <div id="form">
                    
                    {!! Form::open(array('action' => 'MessagesController@send_message', 'enctype' => 'multipart/form-data')) !!}
                        
                        <input type="text" name="name" placeholder="{{ $commonInfos[13]['value'] }}">
                        <input type="email" name="mail" placeholder="Email">
                        <input type="text" name="subject" placeholder="{{ $commonInfos[14]['value'] }}">
                        <textarea rows="10" name="text" ></textarea>
                        <input type="submit" value="{{ $commonInfos[15]['value'] }}">
                    {!! Form::close() !!}
                </div>
            </div>
            <div id="socialNetworks">
                @foreach($socialNetworks as $network)
                <a href="{{ $network['link'] }}">
                    <img src="{{ asset('img/'.$network['icon']) }}" width="30" height="30">
                </a>
                @endforeach
            </div>
        </div>
        
        <div id="footerLayer" class="parallax__layer parallax__layer--base">
            
            <div id="footer">
                
                <div>
                    Created by:
                    <br>
                    Sergei Holovanenko 2017 &#169;
                </div>
                
                <div></div>
                
                <div>
                    @foreach ($mails as $mail)
                        {{ $mail['mail'] }}
                        <br>
                    @endforeach
                    
                    @foreach ($phones as $phone)
                        {{ $phone['phone'] }}
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection