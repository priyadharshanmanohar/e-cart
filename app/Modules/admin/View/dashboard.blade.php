@extends('admin::layouts.admin')
@section('content')

<div class="container">
        <div class="row">
          <div class="col-md-8"><canvas id="myChart"></canvas></div>
          <div class="col-md-4">
              
          </div>
        </div>
      </div>
        
  

      <script>
          var userStatus=[];
          var adminCount=0;
          var imageeditorCount=0;
          var contenteditorCount=0;
          @foreach($users as $user)
          if('{{$user->user_type}}'=='admin')
          adminCount+=1;
          else if('{{$user->user_type}}'=='image_editor')
          imageeditorCount+=1;
          else
          contenteditorCount+=1;
            
        @endforeach
        userStatus.push(adminCount);
        userStatus.push(imageeditorCount);
        userStatus.push(contenteditorCount);

            var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["Admin", "Image Editor","Content Editor"],
        datasets: [{
        label: ['# of Active Users'],
        data: userStatus,
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(191, 127, 63, 0.2)',
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(191, 127, 63, 1)',
        ],
        borderWidth: 1
        }]
        },
        options: {
        scales: {
        yAxes: [{
        ticks: {
        beginAtZero: true
        }
        }]
        }
        }
        });
        </script>
        
@endsection
