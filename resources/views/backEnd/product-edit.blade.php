@extends('./fontEnd/master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Register</div>

                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table style="align: center; width: 600px; margin: 0 auto; celpadding:0;" >
                            <form action="{{url('/product-management/update')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$pdt->id}}" />
                                <tr>
                                    <td class="form-control"><label >Title:</label></td>
                                    <td><input class="form-control" type="text" name="title" value="{{$pdt->title}}"></td>
                                </tr>
                                <tr>
                                    <td class="form-control"><label>Price:</label></td>
                                    <td><input class="form-control" type="text" name="price" value="{{$pdt->price}}"></td>
                                </tr>
                                <tr>
                                    <td class="form-control"><label>Stock:</label></td>
                                    <td><input class="form-control" type="text" name="stock" value="{{$pdt->stock}}"></td>
                                </tr>
                                <tr>
                                    <td class="form-control"><label>Discount:</label></td>
                                    <td><input class="form-control" type="text" name="discount" value="{{$pdt->discount}}"></td>
                                </tr>
                                <tr>
                                    <td class="form-control"><label>Description:</label></td>
                                    <td><textarea class="form-control" name="description" rows="4" cols="50">{!! File::get(storage_path("app/product/{$pdt->id}.txt")) !!}</textarea></td>
                                </tr>

                                <tr>
                                    <td class="form-control"><label>Picture 1:</label></td>
                                    <td>
                                        <img src='{{asset("public/images/product/{$pdt->id}-1.{$pdt->picture1}")}}' width="200px" height="200px"/>
                                        <input class="form-control" type="file" name="picture1" value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="form-control"><label>Picture 2:</label></td>
                                    <td>
                                        <img src='{{asset("public/images/product/{$pdt->id}-2.{$pdt->picture2}")}}' width="200px" height="200px"/>
                                        <input class="form-control" type="file" name="picture2" value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="form-control"><label>Picture 3:</label></td>
                                    <td>
                                        <img src='{{asset("public/images/product/{$pdt->id}-3.{$pdt->picture3}")}}' width="200px" height="200px"/>
                                        <input class="form-control" type="file" name="picture3" value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td> </td>
                                    <td ><br/><input class="form-control" type="submit" name="submit" value="Update"></td>
                                </tr>

                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#cntid").change(function () {
                var cnt = $("#cntid").val();
                $("#ctid").html("");

                if (cnt == 0) {
                    $("#ctid").append("<option value='0'>Choose Country First...</option>");
                }
                <?php
                /*
                  foreach ($allCnt as $cnt) {
                  echo "else if(cnt == $cnt->id){";
                  foreach ($allCt as $ct) {
                  if ($ct->country_id == $cnt->id) {
                  echo "$(\"#ctid\").append(\"<option value='{$ct->id}'>$ct->name</option>\");";
                  }
                  }
                  echo "}";
                  }
                 *
                 */
                ?>
                /*
                 else if(cnt == 1){
                 $("#ctid").append("<option value='1'>Dhaka</option>");
                 $("#ctid").append("<option value='2'>Khulna</option>");
                 }
                 */
            });
        });
    </script>
@endsection