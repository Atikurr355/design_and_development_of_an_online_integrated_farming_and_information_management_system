<marquee class="marquee" scrollamount="20"  behavior="scroll" direction="up">


    @foreach ($Shortposts as $Shortpost)

    <div id="mq" class=" d-flex flex-row p-4">
      <div>
        <i class="fa p-2 mx-4 text-primary fa-check"></i>
      </div>
      <div class="align-self-end">
        <p>{{$Shortpost->name}}</p>
        <p>
          {{$Shortpost->shortpost}}
        </p>
      </div>
    </div>
  @endforeach

  </marquee>
