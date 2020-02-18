<?php

Route::apiResources([
    'cities' => 'CityController',
    'delivery_times' => 'DeliveryTimeController'
]);

Route::post('cities/{city}/delivery-times', 'CityController@attachDeliveryTimesToCity');

Route::post('delevry-excludes/{city_id}/{delivery_time_id}/{delevry_exclude_id}', 'DeliveryExcludeController@delevryExcludes');

Route::post('delevry-excludes-all/{city_id}/{delevry_exclude}', 'DeliveryExcludeController@delevryExcludesAll');


Route::get('cities/{city}/delivery-dates-times/{number_of_days}', 'CityController@availableDelivery');
