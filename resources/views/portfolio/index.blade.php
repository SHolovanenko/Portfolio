@extends('portfolio.layout')

@section('content')
<div id="parallax" class="parallax">
    
    <div class="parallax__group">
        
        <div id="home" class="parallax__layer parallax__layer--base">
            
            <div class="menu">
            
                <ul>
                    <a href="#"><li>Главная</li></a>
                    <a href="#"><li>Навыки</li></a>
                    <a href="#"><li>Опыт</li></a>
                    <a href="#"><li>Портфолио</li></a>
                    <a href="#"><li>Контакты</li></a>
                </ul>
            </div>
            
            <div id="present">

                <div id="name">
                    СЕРГЕЙ<br>            
                    ГОЛОВАНЕНКО
                </div>

                <div class="subtitle">
                    Веб-разработчик
                </div>
            </div>
        </div>
        
        <div class="spacer parallax__layer parallax__layer--back">&nbsp;</div>
    </div>



    <div class="parallax__group">
        
        <div id="skills" class="parallax__layer parallax__layer--base">

            <div class="titlePosition">

                <div class="title">НАВЫКИ</div>

                <div class="subtitle">УРОВЕНЬ ВЛАДЕНИЯ ТЕХНОЛОГИЯМИ</div>
            </div>

            <div id="skillContent">

                <div id="listOfSkills">

                    <div class="skillLine">

                        <div class="skillName">PHP</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_php" id="scale_php">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_php"><span class="number">85</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine">

                        <div class="skillName">JAVASCRIPT</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_javascript" id="scale_javascript">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_javascript"><span class="number">80</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine">  

                        <div class="skillName">SQL</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_sql" id="scale_sql">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_sql"><span class="number">70</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine"> 

                        <div class="skillName">HTML&CSS</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_htlmcss" id="scale_htlmcss">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_htlmcss"><span class="number">80</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine">   

                        <div class="skillName">LARAVEL</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_laravel" id="scale_laravel">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_laravel"><span class="number">12</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine">    

                        <div class="skillName">WORDPRESS</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_wordpress" id="scale_wordpress">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_wordpress"><span class="number">60</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine">

                        <div class="skillName">DRUPAL</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_drupal" id="scale_drupal">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_drupal"><span class="number">75</span>%</div>
                        </div>
                    </div>



                    <div class="skillLine"> 

                        <div class="skillName">JOOMLA</div>

                        <div class="scale">

                            <div class="scaleLine cutedSize scale_joomla" id="scale_joomla">&nbsp;</div>

                            <div class="scaleValue" id="scaleValue_joomla"><span class="number">80</span>%</div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>



    <div class="parallax__group">
        
        <div class="spacer parallax__layer parallax__layer--base">&nbsp;</div>
        
        <div class="spacer parallax__layer parallax__layer--back">&nbsp;</div>
    </div>
    
    
    
    <div id="history" class="parallax__group">
        
        <div id="resume" class="parallax__layer parallax__layer--fore">
            
            <div class="title">Языки: </div>
            
            <div class="content">
                PHP, SQL, Python, Javascript, HTML, CSS, Java, C++, C#;
                <br>
                (English, Francais, Українська, Русский)
            </div>
            
            
            
            <div class="title">Технологии: </div>
            
            <div class="content">
                OOP, MVC pattern, Laravel, JQuery, Bootstrap, Ajax, 
                JSON, MySQL, Git, Composer, TortoiseSVN,  
                Modules creating for the CMSs;
            </div>
            
            
            
            <div class="title">CMSs: </div>
            
            <div class="content">
                Joomla, Wordpress, Drupal;
            </div>
            
            
            
            <div id="downloadResume">
                <a href="#">Скачать резюме</a>
            </div>
        </div>
        
        <div id="historyContent" class="parallax__layer parallax__layer--back">
            
            <div class="storyLine storyLineFirst">
                
                <div class="storyLeft empty"></div>
                
                <div id="firstDot" class="storyDot"></div>
                
                <div class="storyRight connectorLineForRight connectorLineHidden connectorLine">
                    
                    <div class="hidden storyContent">
                        
                        <div class="storyDate">
                            2016 - 2017
                        </div>

                        <div class="storyPlace">
                            Erasus+ во Франции
                        </div>

                        <div class="storyPerson">
                            Студент
                        </div>

                        <div class="storyExplain">
                            Участвовал в годовой программе Erasmus+ 
                            и учился в лионском университете Lyon Lumiere 2 
                            на специальности информатика и статистика.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="storyLine">
                
                <div class="storyLeft connectorLineForLeft connectorLineHidden connectorLine">
                    
                    <div class="hidden storyContent">
                        
                        <div class="storyDate">
                            2015 - 2016
                        </div>

                        <div class="storyPlace">
                            ЦБВМ СумГУ
                        </div>

                        <div class="storyPerson">
                            Back-end программист
                        </div>

                        <div class="storyExplain">
                            Отдел веб-разработки при университете. 
                            В течении года работал в команде с опытными 
                            программистами над университетскими проэктами,
                            а так же проэктами от зарубежных заказчиков.
                        </div>
                    </div>
                </div>
                
                <div class="storyDot"></div>
                
                <div class="storyRight empty"></div>
            </div>
            
            <div class="storyLine">
                
                <div class="storyLeft empty"></div>
                
                <div class="storyDot"></div>
                
                <div class="storyRight connectorLineForRight connectorLineHidden connectorLine">
                    
                    <div class="hidden storyContent">
                        
                        <div class="storyDate">
                            2014 - 2016
                        </div>

                        <div class="storyPlace">
                            Диплом бакалавра СумГУ
                        </div>

                        <div class="storyPerson">
                            Студент
                        </div>

                        <div class="storyExplain">
                            В течении 2х лет учился в Сумском Государственном
                            университете на кафедре компьютерных 
                            наук, специальноси информатика. Где проводил
                            защиту диплома по теме «Веб-сервис для 
                            централизованного администрирования опросов».
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="storyLine storyLineLast">
                
                <div class="storyLeft connectorLineForLeft connectorLineHidden connectorLine">
                    
                    <div class="hidden storyContent">
                        <div class="storyDate">
                            2012 - 2014
                        </div>

                        <div class="storyPlace">
                            ВНУ им. В.Даля
                        </div>

                        <div class="storyPerson">
                            Студент
                        </div>

                        <div class="storyExplain">
                            Поступил в Восточноукраинский национальный 
                            университет имени В.Даля на кафедру компьютерных наук,
                            специальности информатика.
                        </div>
                    </div>
                </div>
                
                <div class="storyDot"></div>
                
                <div class="storyRight empty"></div>
            </div>
        </div>

        <div id="bgMountain" class="parallax__layer parallax__layer--deep">
            
            <div class="cover">
                
                <div class="title hidden">ОПЫТ И ОБРАЗОВАНИЕ</div>
            </div>
        </div>
    </div>
</div>

@endsection