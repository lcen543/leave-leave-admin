<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                @if(isset($title))
                    <h4>{{ $title }}</h4>
                @endif
            </div>

            @if ( $grid->showTools() || $grid->showExportBtn() || $grid->showCreateBtn() )
            <div class="box-header with-border">
                <div class="pull-right">
                    {!! $grid->renderColumnSelector() !!}
                    {!! $grid->renderExportButton() !!}
                    {!! $grid->renderCreateButton() !!}
                </div>
                @if ( $grid->showTools() )
                <span>
                    {!! $grid->renderHeaderTools() !!}
                </span>
                @endif
            </div>
            @endif

            {!! $grid->renderFilter() !!}

            {!! $grid->renderHeader() !!}


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 text-nowrap" id="{{ $grid->tableID }}">
                        <thead>
                            <tr>
                                @foreach($grid->visibleColumns() as $column)
                                <th>{{$column->getLabel()}}{!! $column->sorter() !!}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($grid->rows() as $row)
                                <tr {!! $row->getRowAttributes() !!}>
                                    @foreach($grid->visibleColumnNames() as $name)
                                    <td {!! $row->getColumnAttributes($name) !!}>
                                        {!! $row->column($name) !!}
                                    </td>
                                    @endforeach
                                </tr>
                            @endforeach 
                        </tbody>    

                        {!! $grid->renderTotalRow() !!}             
                    </table>
                </div>
            </div>

            {!! $grid->renderFooter() !!}

            <div class="box-footer clearfix">
                {!! $grid->paginator() !!}
            </div>
        </div>
    </div>
</div>