@extends('layout.default')

@section('title', $__t('Shopping list settings'))

@section('viewJsName', 'shoppinglistsettings')

@section('content')
<div class="row">
	<div class="col">
		<h2 class="title">@yield('title')</h2>
	</div>
</div>

<hr class="my-2">

<div class="row">
	<div class="col-lg-6 col-12">
		<h4 class="mt-2">{{ $__t('Shopping list') }}</h4>
		<div class="form-group">
			<div class="custom-control custom-checkbox">
				<input type="checkbox"
					class="form-check-input custom-control-input user-setting-control"
					id="shopping_list_show_calendar"
					data-setting-key="shopping_list_show_calendar">
				<label class="form-check-label custom-control-label"
					for="shopping_list_show_calendar">
					{{ $__t('Show a month-view calendar') }}
				</label>
			</div>

			<div class="custom-control custom-checkbox">
				<input type="checkbox"
					class="form-check-input custom-control-input user-setting-control"
					id="stock_auto_add_below_min_stock_amount_to_shopping_list"
					data-setting-key="stock_auto_add_below_min_stock_amount_to_shopping_list">
				<label class="form-check-label custom-control-label"
					for="stock_auto_add_below_min_stock_amount_to_shopping_list">
					{{ $__t('Automatically add products that are below their defined min. stock amount to the shopping list') }}
					<select class="custom-control custom-select user-setting-control"
						id="stock_auto_add_below_min_stock_amount_to_shopping_list_id"
						data-setting-key="stock_auto_add_below_min_stock_amount_to_shopping_list_id"
						@if(!boolval($userSettings['stock_auto_add_below_min_stock_amount_to_shopping_list']))
						disabled
						@endif>
						@foreach($shoppingLists as $shoppingList)
						<option value="{{ $shoppingList->id }}">{{ $shoppingList->name }}</option>
						@endforeach
					</select>
				</label>
			</div>
		</div>

		<h4 class="mt-2">{{ $__t('Shopping list to stock workflow') }}</h4>
		<div class="form-group">
			<div class="custom-control custom-checkbox">
				<input type="checkbox"
					class="form-check-input custom-control-input user-setting-control"
					id="shopping_list_to_stock_workflow_auto_submit_when_prefilled"
					data-setting-key="shopping_list_to_stock_workflow_auto_submit_when_prefilled">
				<label class="form-check-label custom-control-label"
					for="shopping_list_to_stock_workflow_auto_submit_when_prefilled">
					{{ $__t('Automatically do the booking using the last price and the amount of the shopping list item, if the product has "Default due days" set') }}
				</label>
			</div>
		</div>

		<a href="{{ $U('/shoppinglist') }}"
			class="btn btn-success">{{ $__t('OK') }}</a>
	</div>
</div>
@stop
