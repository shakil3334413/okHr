@extends('layouts.master')
@section('title','Create Job Category')
@push('css')
 <style>

#myKanban{overflow-x: auto; padding:20px 0;}

.success{background: #00B961; color:#fff}
.info{background: #2A92BF; color:#fff}
.warning{background: #F4CE46; color:#fff}
.error{background: #FB7D44; color:#fff}
 </style>
 <link rel="stylesheet" href="{{ asset('frontend/kanban/css/kanban.css') }}">
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
          <hr>
          <div id="myKanban"></div>
          <button class="btn btn-success" id="addDefault">Add "Default" board</button>
          <button class="btn btn-success" id="addToDo">Add element in "To Do" Board</button>
          <button class="btn btn-danger" id="removeBoard">Remove "Done" Board</button>
       </div>
    </div>
 </div>
@endsection
@push('js')
<script src="{{ asset('frontend/kanban/js/kanban.js') }}"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
var arrd = [];
$(document).ready(function() {
    $.get("/get-department", function(data){
        //data = JSON.parse(data)
        // console.log(data);
        arrd = data;
        // data.forEach(el => {
        //     console.log(el.name)
        //     // option += "<option value='"+el.id+"'>"+el.name+"</option>"
        //     // KanbanTest.boards.item[0].push({'title' : el.name})
        //     this.arrd.push(el);
        // });
        // $('#viewer').html(option);
    });

    
  });
  console.log(arrd);
    var KanbanTest = new jKanban({
        element : '#myKanban',
        gutter  : '10px',
        click : function(el){
            alert(el.innerHTML);
            alert(el.dataset.eid)
        },
        boards  :[
            {
                'id' : '_todo',
                'title'  : 'To Do (drag me)',
                'class' : 'info',
                'item'  : [
                    {
                       
                        'title':'Try drag me 1111111111111',
                    },
                    {
                       
                        'title':'Click me!!',
                    }
                ]
            },
            {
                'id' : '_working',
                'title'  : 'Working',
                'class' : 'warning',
                'item'  : [
                    {
                        'title':'Do Something!',
                    },
                    {
                        'title':'Run?',
                    }
                ]
            },
            {
                'id' : '_done',
                'dragTo' : ['_working'],
                'title'  : 'Done (Drag only in Working)',
                'class' : 'success',
                'item'  : [
                    {
                        'title':'All right',
                    },
                    {
                        'title':'Ok!',
                    }
                ]
            }
        ]
    });

    var toDoButton = document.getElementById('addToDo');
    toDoButton.addEventListener('click',function(){
        KanbanTest.addElement(
            '_todo',
            {
                'title':'Test Add',
            }
        );
    });

    var addBoardDefault = document.getElementById('addDefault');
    addBoardDefault.addEventListener('click', function () {
        KanbanTest.addBoards(
            [{
                'id' : '_default',
                'title'  : 'Default (Can\'t drop in Done)',
                'dragTo':['_todo','_working'],
                'class' : 'error',
                'item'  : [
                    {
                        'title':'Default Item',
                    },
                    {
                        'title':'Default Item 2',
                    },
                    {
                        'title':'Default Item 3',
                    }
                ]
            }]
        )
    });

    var removeBoard = document.getElementById('removeBoard');
    removeBoard.addEventListener('click',function(){
        KanbanTest.removeBoard('_done');
    });
</script>
@endpush