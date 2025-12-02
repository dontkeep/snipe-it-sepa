@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{ trans('general.dashboard') }}
@parent
@stop


{{-- Page content --}}
@section('content')

@if ($snipeSettings->dashboard_message!='')
<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        {!!  Helper::parseEscapedMarkedown($snipeSettings->dashboard_message)  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">

    <!-- panel -->
    <div class="col-lg-2 col-xs-6">
        <a href="{{ route('hardware.index') }}">
            <!-- outlined hardware box with updated layout -->
            <div class="dashboard outline-card border-teal">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-teal">{{ number_format(\App\Models\Asset::AssetsForShow()->count()) }}</h3>
                            <p class="text-muted">{{ trans('general.assets') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="assets" class="text-teal" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-teal">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->

    <div class="col-lg-2 col-xs-6">
        <a href="{{ route('licenses.index') }}" aria-hidden="true">
            <!-- outlined license box with updated layout -->
            <div class="dashboard outline-card border-maroon">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-maroon">{{ number_format($counts['license']) }}</h3>
                            <p class="text-muted">{{ trans('general.licenses') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="licenses" class="text-maroon" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-maroon">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->


    <div class="col-lg-2 col-xs-6">
    <!-- outlined accessories box with updated layout -->
        <a href="{{ route('accessories.index') }}">
            <div class="dashboard outline-card border-orange">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-orange"> {{ number_format($counts['accessory']) }}</h3>
                            <p class="text-muted">{{ trans('general.accessories') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="accessories" class="text-orange" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-orange">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->

    <div class="col-lg-2 col-xs-6">
    <!-- outlined consumables box with updated layout -->
        <a href="{{ route('consumables.index') }}">
            <div class="dashboard outline-card border-purple">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-purple"> {{ number_format($counts['consumable']) }}</h3>
                            <p class="text-muted">{{ trans('general.consumables') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="consumables" class="text-purple" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-purple">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->

    <div class="col-lg-2 col-xs-6">
        <!-- outlined components box with updated layout -->
        <a href="{{ route('components.index') }}">
            <div class="dashboard outline-card border-yellow">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-yellow">{{ number_format($counts['component']) }}</h3>
                            <p class="text-muted">{{ trans('general.components') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="components" class="text-yellow" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-yellow">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->

    <div class="col-lg-2 col-xs-6">
        <!-- outlined users box with updated layout -->
        <a href="{{ route('users.index') }}">
            <div class="dashboard outline-card border-light-blue">
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="text-light-blue">{{ number_format($counts['user']) }}</h3>
                            <p class="text-muted">{{ trans('general.people') }}</p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="icon" aria-hidden="true">
                                <x-icon type="users" class="text-light-blue" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outline-card-footer text-light-blue">
                    <div class="row">
                        <div class="col-xs-10">
                            {{ trans('general.view_all') }}
                        </div>
                        <div class="col-xs-2 text-right">
                            <x-icon type="arrow-circle-right" />
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!-- ./col -->

</div>

@if ($counts['grand_total'] == 0)

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h2 class="box-title">{{ trans('general.dashboard_info') }}</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="progress">
                                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">{{ trans('general.60_percent_warning') }}</span>
                                </div>
                            </div>


                            <p><strong>{{ trans('general.dashboard_empty') }}</strong></p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            @can('create', \App\Models\Asset::class)
                            <a class="btn btn-teal" style="width: 100%" href="{{ route('hardware.create') }}">{{ trans('general.new_asset') }}</a>
                            @endcan
                        </div>
                        <div class="col-md-2">
                            @can('create', \App\Models\License::class)
                                <a class="btn btn-maroon" style="width: 100%" href="{{ route('licenses.create') }}">{{ trans('general.new_license') }}</a>
                            @endcan
                        </div>
                        <div class="col-md-2">
                            @can('create', \App\Models\Accessory::class)
                                <a class="btn btn-orange" style="width: 100%" href="{{ route('accessories.create') }}">{{ trans('general.new_accessory') }}</a>
                            @endcan
                        </div>
                        <div class="col-md-2">
                            @can('create', \App\Models\Consumable::class)
                                <a class="btn btn-purple" style="width: 100%" href="{{ route('consumables.create') }}">{{ trans('general.new_consumable') }}</a>
                            @endcan
                        </div>
                        <div class="col-md-2">
                            @can('create', \App\Models\Component::class)
                                <a class="btn btn-yellow" style="width: 100%" href="{{ route('components.create') }}">{{ trans('general.new_component') }}</a>
                            @endcan
                        </div>
                        <div class="col-md-2">
                            @can('create', \App\Models\User::class)
                                <a class="btn btn-light-blue" style="width: 100%" href="{{ route('users.create') }}">{{ trans('general.new_user') }}</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else

<!-- recent activity -->
<div class="row">
  <div class="col-md-8">
    <div class="box box-default">
      <div class="box-header with-border">
        <h2 class="box-title">{{ trans('general.recent_activity') }}</h2>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                <x-icon type="minus" />
                <span class="sr-only">{{ trans('general.collapse') }}</span>
            </button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            
            <div class="table-responsive">

                <table
                    data-cookie-id-table="dashActivityReport"
                    data-height="500"
                    data-pagination="false"
                    data-side-pagination="server"
                    data-id-table="dashActivityReport"
                    data-sort-order="desc"
                    data-sort-name="created_at"
                    id="dashActivityReport"
                    class="table table-striped snipe-table"
                    data-url="{{ route('api.activity.index', ['limit' => 25]) }}">
                    
                    <thead>
                    <tr>
                        <th data-field="icon" data-visible="true" style="width: 40px;" class="hidden-xs" data-formatter="iconFormatter"><span  class="sr-only">{{ trans('admin/hardware/table.icon') }}</span></th>
                        <th class="col-sm-3" data-visible="true" data-field="created_at" data-formatter="dateDisplayFormatter">{{ trans('general.date') }}</th>
                        <th class="col-sm-2" data-visible="true" data-field="admin" data-formatter="usersLinkObjFormatter">{{ trans('general.created_by') }}</th>
                        <th class="col-sm-2" data-visible="true" data-field="action_type">{{ trans('general.action') }}</th>
                        <th class="col-sm-3" data-visible="true" data-field="item" data-formatter="polymorphicItemFormatter">{{ trans('general.item') }}</th>
                        <th class="col-sm-2" data-visible="true" data-field="target" data-formatter="polymorphicItemFormatter">{{ trans('general.target') }}</th>
                    </tr>
                    </thead>
                </table>

            </div><!-- /.responsive -->
          </div><!-- /.col -->
          <div class="text-center col-md-12" style="padding-top: 10px;">
            <a href="{{ route('reports.activity') }}" class="btn btn-primary btn-sm" style="width: 100%">{{ trans('general.viewall') }}</a>
          </div>
        </div><!-- /.row -->
      </div><!-- ./box-body -->
    </div><!-- /.box -->
  </div>
  <div class="col-md-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title">
                    {{ (\App\Models\Setting::getSettings()->dash_chart_type == 'name') ? trans('general.assets_by_status') : trans('general.assets_by_status_type') }}
                </h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                        <x-icon type="minus" />
                        <span class="sr-only">{{ trans('general.collapse') }}</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-responsive">
                            <div class="chart-container">
                                <canvas id="statusPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

</div> <!--/row-->
<div class="row">
    <div class="col-md-6">

		@if ((($snipeSettings->scope_locations_fmcs!='1') && ($snipeSettings->full_multiple_companies_support=='1')))
			 <!-- Companies -->	
			<div class="box box-default">
				<div class="box-header with-border">
					<h2 class="box-title">{{ trans('general.companies') }}</h2>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <x-icon type="minus" />
							<span class="sr-only">{{ trans('general.collapse') }}</span>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
							<table
									data-cookie-id-table="dashCompanySummary"
									data-height="400"
                                    data-pagination="false"
									data-side-pagination="server"
									data-sort-order="desc"
									data-sort-field="assets_count"
									id="dashCompanySummary"
									class="table table-striped snipe-table"
									data-url="{{ route('api.companies.index', ['sort' => 'assets_count', 'order' => 'asc']) }}">

								<thead>
								<tr>
									<th class="col-sm-3" data-visible="true" data-field="name" data-formatter="companiesLinkFormatter" data-sortable="true">{{ trans('general.name') }}</th>
									<th class="col-sm-1" data-visible="true" data-field="users_count" data-sortable="true">
                                        <x-icon type="users" />
										<span class="sr-only">{{ trans('general.people') }}</span>
									</th>
									<th class="col-sm-1" data-visible="true" data-field="assets_count" data-sortable="true">
                                        <x-icon type="assets" />
										<span class="sr-only">{{ trans('general.asset_count') }}</span>
									</th>
									<th class="col-sm-1" data-visible="true" data-field="accessories_count" data-sortable="true">
                                        <x-icon type="accessories" />
										<span class="sr-only">{{ trans('general.accessories_count') }}</span>
									</th>
									<th class="col-sm-1" data-visible="true" data-field="consumables_count" data-sortable="true">
                                        <x-icon type="consumables" />
										<span class="sr-only">{{ trans('general.consumables_count') }}</span>
									</th>
									<th class="col-sm-1" data-visible="true" data-field="components_count" data-sortable="true">
                                        <x-icon type="components" />
										<span class="sr-only">{{ trans('general.components_count') }}</span>
									</th>
									<th class="col-sm-1" data-visible="true" data-field="licenses_count" data-sortable="true">
                                        <x-icon type="licenses" />
										<span class="sr-only">{{ trans('general.licenses_count') }}</span>
									</th>
								</tr>
								</thead>
							</table>
							</div>
						</div> <!-- /.col -->
						<div class="text-center col-md-12" style="padding-top: 10px;">
							<a href="{{ route('companies.index') }}" class="btn btn-primary btn-sm" style="width: 100%">{{ trans('general.viewall') }}</a>
                        </div>
                    </div> <!-- /.row -->

                </div><!-- /.box-body -->
            </div> <!-- /.box -->
        
        @else
             <!-- Locations -->
             <div class="box box-default">
                <div class="box-header with-border">
                    <h2 class="box-title">{{ trans('general.locations') }}</h2>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <x-icon type="minus" />
                            <span class="sr-only">{{ trans('general.collapse') }}</span>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                            <table
                                    data-cookie-id-table="dashLocationSummary"
                                    data-height="400"
                                    data-side-pagination="server"
                                    data-pagination="false"
                                    data-sort-order="desc"
                                    data-sort-field="assets_count"
                                    id="dashLocationSummary"
                                    class="table table-striped snipe-table"
                                    data-url="{{ route('api.locations.index', ['sort' => 'assets_count', 'order' => 'asc']) }}">
                                <thead>
                                <tr>
                                    <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="locationsLinkFormatter" data-sortable="true">{{ trans('general.name') }}</th>
                                    
                                    <th class="col-sm-1" data-visible="true" data-field="assets_count" data-sortable="true">
                                        <x-icon type="assets" />
                                        <span class="sr-only">{{ trans('general.asset_count') }}</span>
                                    </th>
                                    <th class="col-sm-1" data-visible="true" data-field="assigned_assets_count" data-sortable="true">
                                        
                                        {{ trans('general.assigned') }}
                                    </th>
                                    <th class="col-sm-1" data-visible="true" data-field="users_count" data-sortable="true">
                                        <x-icon type="users" />
                                        <span class="sr-only">{{ trans('general.people') }}</span>
                                        
                                    </th>
                                    
                                </tr>
                                </thead>
                            </table>
                            </div>
                        </div> <!-- /.col -->
                        <div class="text-center col-md-12" style="padding-top: 10px;">
                            <a href="{{ route('locations.index') }}" class="btn btn-primary btn-sm" style="width: 100%">{{ trans('general.viewall') }}</a>
                        </div>
                    </div> <!-- /.row -->

                </div><!-- /.box-body -->
            </div> <!-- /.box -->

        @endif
            
    </div>
    <div class="col-md-6">

        <!-- Categories -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title">{{ trans('general.asset') }} {{ trans('general.categories') }}</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <x-icon type="minus" />
                        <span class="sr-only">{{ trans('general.collapse') }}</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table
                                data-cookie-id-table="dashCategorySummary"
                                data-height="400"
                                data-pagination="false"
                                data-side-pagination="server"
                                data-sort-order="desc"
                                data-sort-field="assets_count"
                                id="dashCategorySummary"
                                class="table table-striped snipe-table"
                                data-url="{{ route('api.categories.index', ['sort' => 'assets_count', 'order' => 'asc']) }}">
                            <thead>
                            <tr>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">{{ trans('general.name') }}</th>
                                <th class="col-sm-3" data-visible="true" data-field="category_type" data-sortable="true">
                                    {{ trans('general.type') }}
                                </th>
                                <th class="col-sm-1" data-visible="true" data-field="assets_count" data-sortable="true">
                                    <x-icon type="assets" />
                                    <span class="sr-only">{{ trans('general.asset_count') }}</span>
                                </th>
                                <th class="col-sm-1" data-visible="true" data-field="accessories_count" data-sortable="true">
                                    <x-icon type="licenses" />
                                    <span class="sr-only">{{ trans('general.accessories_count') }}</span>
                                </th>
                                <th class="col-sm-1" data-visible="true" data-field="consumables_count" data-sortable="true">
                                    <x-icon type="consumables" />
                                    <span class="sr-only">{{ trans('general.consumables_count') }}</span>
                                </th>
                                <th class="col-sm-1" data-visible="true" data-field="components_count" data-sortable="true">
                                    <x-icon type="components" />
                                    <span class="sr-only">{{ trans('general.components_count') }}</span>
                                </th>
                                <th class="col-sm-1" data-visible="true" data-field="licenses_count" data-sortable="true">
                                    <x-icon type="licenses" />
                                    <span class="sr-only">{{ trans('general.licenses_count') }}</span>
                                </th>
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div> <!-- /.col -->
                    <div class="text-center col-md-12" style="padding-top: 10px;">
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm" style="width: 100%">{{ trans('general.viewall') }}</a>
                    </div>
                </div> <!-- /.row -->

            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>


@endif


@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['simple_view' => true, 'nopages' => true])
@stop

@push('css')
<style>
    /* Clean Outline Card Styles with Color - UPDATED LAYOUT */
    .outline-card {
        position: relative;
        border-radius: 8px;
        margin-bottom: 20px;
        padding: 15px;
        background: white;
        border: 2px solid #e0e0e0;
        transition: all 0.3s ease;
        min-height: 130px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    /* Border colors */
    .border-teal {
        border-color: #20c997;
    }
    
    .border-maroon {
        border-color: #d81b60;
    }
    
    .border-orange {
        border-color: #ff851b;
    }
    
    .border-purple {
        border-color: #605ca8;
    }
    
    .border-yellow {
        border-color: #ffc107;
    }
    
    .border-light-blue {
        border-color: #3c8dbc;
    }

    .outline-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .outline-card .inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 0;
    }

    .outline-card .inner .row {
        margin: 0;
        align-items: center;
    }

    .outline-card .inner h3 {
        font-size: 32px;
        font-weight: 600;
        margin: 0 0 5px 0;
        line-height: 1;
    }

    .outline-card .inner p {
        font-size: 14px;
        margin: 0;
        color: #666;
        font-weight: 500;
    }

    /* Text colors */
    .text-teal { color: #20c997 !important; }
    .text-maroon { color: #d81b60 !important; }
    .text-orange { color: #ff851b !important; }
    .text-purple { color: #605ca8 !important; }
    .text-yellow { color: #ffc107 !important; }
    .text-light-blue { color: #3c8dbc !important; }

    .outline-card .icon {
        font-size: 40px;
        transition: all 0.3s ease;
        line-height: 1;
        margin-top: -5px;
    }

    .outline-card:hover .icon {
        transform: scale(1.1);
    }

    .outline-card-footer {
        padding: 8px 0 0 0;
        background: transparent;
        border-top: 1px solid #e0e0e0;
        font-size: 14px;
        font-weight: 500;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: all 0.3s ease;
        width: 100%;
    }

    .outline-card-footer .row {
        margin: 0;
        width: 100%;
        align-items: center;
    }

    .outline-card-footer .col-xs-10 {
        padding-left: 0;
        padding-right: 5px;
    }

    .outline-card-footer .col-xs-2 {
        padding-left: 5px;
        padding-right: 0;
    }

    .outline-card:hover .outline-card-footer {
        border-top-color: #ccc;
    }

    /* Button colors for empty state */
    .btn-teal {
        background-color: #20c997;
        border-color: #20c997;
        color: white;
    }
    
    .btn-maroon {
        background-color: #d81b60;
        border-color: #d81b60;
        color: white;
    }
    
    .btn-orange {
        background-color: #ff851b;
        border-color: #ff851b;
        color: white;
    }
    
    .btn-purple {
        background-color: #605ca8;
        border-color: #605ca8;
        color: white;
    }
    
    .btn-yellow {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #333;
    }
    
    .btn-light-blue {
        background-color: #3c8dbc;
        border-color: #3c8dbc;
        color: white;
    }

    /* Make sure links have no underline */
    .outline-card + a,
    .outline-card a {
        text-decoration: none;
        color: inherit;
    }

    .outline-card + a:hover,
    .outline-card a:hover {
        text-decoration: none;
        color: inherit;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .outline-card {
            min-height: 110px;
            padding: 12px;
        }
        
        .outline-card .inner h3 {
            font-size: 26px;
        }
        
        .outline-card .inner p {
            font-size: 12px;
        }
        
        .outline-card .icon {
            font-size: 32px;
        }
        
        .outline-card-footer {
            padding: 6px 0 0 0;
            font-size: 13px;
            margin-top: 8px;
        }
    }

    /* Chart colors for better visibility */
    .chart-container canvas {
        max-height: 250px;
    }

    /* Remove default Bootstrap column padding for better alignment */
    .outline-card .inner .col-xs-8,
    .outline-card .inner .col-xs-4 {
        padding-left: 0;
        padding-right: 0;
    }

    /* Align footer text properly */
    .outline-card-footer .text-right {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
</style>
@endpush

@push('js')
        <script src="{{ url(mix('js/dist/Chart.min.js')) }}"></script>
<script nonce="{{ csrf_token() }}">
    // ---------------------------
    // - ASSET STATUS DONUT CHART -
    // ---------------------------
    
    $(document).ready(function() {
        initializeDonutChart();
    });

    function initializeDonutChart() {
        var donutChartCanvas = document.getElementById("statusPieChart");
        
        if (!donutChartCanvas) {
            console.error('Canvas element not found');
            return;
        }

        var ctx = donutChartCanvas.getContext("2d");
        
        // Clear any existing chart
        if (window.statusDonutChartInstance) {
            window.statusDonutChartInstance.destroy();
        }

        var donutOptions = {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true,
                        fontFamily: 'inherit',
                        font: {
                            size: 12
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.label || '';
                            var value = context.raw;
                            var total = context.dataset.data.reduce((a, b) => a + b, 0);
                            var percentage = Math.round((value / total) * 100);
                            return label + ': ' + value + ' (' + percentage + '%)';
                        }
                    }
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        $.ajax({
            type: 'GET',
            url: '{{ (\App\Models\Setting::getSettings()->dash_chart_type == 'name') ? route('api.statuslabels.assets.byname') : route('api.statuslabels.assets.bytype') }}',
            headers: {
                "X-Requested-With": 'XMLHttpRequest',
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                if (!data || !data.datasets || !data.datasets.length) {
                    console.error('Invalid chart data received');
                    showChartError();
                    return;
                }

                // Use the same color palette as the cards for consistency
                var colorPalette = [
                    '#20c997', '#d81b60', '#ff851b', 
                    '#605ca8', '#ffc107', '#3c8dbc',
                    '#6c757d', '#28a745', '#17a2b8', 
                    '#e83e8c', '#fd7e14', '#20c997'
                ];

                var enhancedData = {
                    labels: data.labels,
                    datasets: data.datasets.map((dataset, index) => ({
                        ...dataset,
                        backgroundColor: colorPalette.slice(0, dataset.data.length),
                        borderWidth: 2,
                        borderColor: '#fff',
                        borderRadius: 4,
                        spacing: 3
                    }))
                };

                window.statusDonutChartInstance = new Chart(ctx, {
                    type: 'doughnut',
                    data: enhancedData,
                    options: donutOptions
                });
            },
            error: function (xhr, status, error) {
                console.error('Error loading chart data:', error);
                showChartError();
            }
        });

        function showChartError() {
            var errorHtml = '<div class="alert alert-info text-center" style="margin: 20px;">' +
                           '<i class="fa fa-info-circle"></i> ' +
                           'Chart data is currently unavailable.' +
                           '</div>';
            $('.chart-responsive').html(errorHtml);
        }
    }

    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.statusDonutChartInstance) {
                window.statusDonutChartInstance.destroy();
                initializeDonutChart();
            }
        }, 250);
    });

</script>
@endpush