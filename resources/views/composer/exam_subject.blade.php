<ul class="nav navbar-nav">                    
    <li class="dropdown">
    	<a href="#">Chooes Exams<span class="caret"></span></a>
         <ul class="dropdown-menu">
             @foreach($all_subjects as $subject)
             <li><a href="<?=URL::to('/home/start',array($subject->id))?>">{{$subject->subject}}</a></li>
             @endforeach
        </ul>
    </li>
</ul>  