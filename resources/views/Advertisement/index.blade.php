@extends('layouts.master')

@section('content')
    <div class="row">
        <h2 style="padding-left: 28% ">Advertisments Portal</h2><br><br>
        <div class="col-lg-3"></div>
        <div class="col-lg-9" style="align-content: center">
            <table style="border: double">
                <tr>
                    <td style="border: double"><b>ID</b></td>
                    <td style="border: double"><b>Title</b></td>
                    <td style="border: double"><b>Body</b></td>
                    <td style="border: double"><b>Created_at</b></td>
                    <td style="border: double"><b>Updated_at</b></td>
                </tr>
                <?php
                    foreach ($advertisements as $advertisement) {
                        ?>
                        <tr><td style="border: double"><?php echo $advertisement->id?></td>
                            <td style="border: double"><?php echo $advertisement->title?></td>
                            <td style="border: double"><?php echo $advertisement->body?></td>
                            <td style="border: double"><?php echo $advertisement->created_at?></td>
                            <td style="border: double"><?php echo $advertisement->updated_at?></td>
                        </tr><?php
                    }
                ?>
            </table>
        </div>
    </div>


@endsection