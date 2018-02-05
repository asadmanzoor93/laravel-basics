@extends('layouts.master')

@section('content')
    <div class="row">
        <h2 style="padding-left: 28% ">To-Do-List Portal</h2><br><br>
        <div class="col-lg-3"></div>
        <div class="col-lg-9" style="align-content: center">
            <table style="border: double">
                <tr>
                    <td style="border: double"><b>ID</b></td>
                    <td style="border: double"><b>Name</b></td>
                    <td style="border: double"><b>Created_at</b></td>
                    <td style="border: double"><b>Updated_at</b></td>
                </tr>
                <?php
                foreach ($todolists as $todolist) {
                ?>
                <tr><td style="border: double"><?php echo $todolist->id?></td>
                    <td style="border: double"><?php echo $todolist->name?></td>
                    <td style="border: double"><?php echo $todolist->created_at?></td>
                    <td style="border: double"><?php echo $todolist->updated_at?></td>
                </tr><?php
                }
                ?>
            </table>
        </div>
    </div>


@endsection