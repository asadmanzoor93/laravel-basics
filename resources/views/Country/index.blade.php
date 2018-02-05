@extends('layouts.master')

@section('content')
    <div class="row">
        <h2 style="padding-left: 28% ">Information Portal</h2><br><br>
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
                    foreach ($countries as $country) {
                        ?>
                        <tr><td style="border: double"><?php echo $country->id?></td>
                            <td style="border: double"><?php echo $country->name?></td>
                            <td style="border: double"><?php echo $country->created_at?></td>
                            <td style="border: double"><?php echo $country->updated_at?></td>
                        </tr><?php
                    }
                ?>
            </table>
        </div>
    </div>


@endsection