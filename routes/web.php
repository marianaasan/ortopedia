<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/ortopedia',function(){ 
	return view ('layouts.admin');
});

/*------------------------Pais------------------*/
route::get ('ortopedia/paisesindex',['as'=>'ortopedia.paises.index' , 'uses'=> 'paisescontroller@index' ] );
route::get ('ortopedia/paisescreate',['as'=>'ortopedia.paises.create' , 'uses'=> 'paisescontroller@create' ]);
route::get ('ortopedia/paisesshow/{id_pais}',['as'=>'ortopedia.paises.show' , 'uses'=> 'paisescontroller@show' ]);
Route::post('/ortopedia/paisesnew',['as'=>'ortopedia.paises.store', 'uses'=>'paisescontroller@store']);
route::get ('ortopedia/paisesmodificar',['as'=>'ortopedia.paises.update' , 'uses'=> 'paisescontroller@update' ]);
route::get ('ortopedia/paiseseliminar/{id_pais}',['as'=>'ortopedia.paises.delete' , 'uses'=> 'paisescontroller@destroy']);



/*------------------------PROVINCIA------------------*/
route::get ('ortopedia/provinciasindex',['as'=>'ortopedia.provincias.index' , 'uses'=> 'provinciascontroller@index' ] );
route::get ('ortopedia/provinciascreate',['as'=>'ortopedia.provincias.create' , 'uses'=> 'provinciascontroller@create' ]);
route::get ('ortopedia/provinciasshow/{id_provincia}',['as'=>'ortopedia.provincias.show' , 'uses'=> 'provinciascontroller@show' ]);
Route::post('/ortopedia/provinciasnew',['as'=>'ortopedia.provincias.store', 'uses'=>'provinciascontroller@store']);
route::get ('ortopedia/provinciasmodificar',['as'=>'ortopedia.provincias.update' , 'uses'=> 'provinciascontroller@update' ]);
route::get ('ortopedia/provinciaseliminar/{id_provincia}',['as'=>'ortopedia.provincias.delete' , 'uses'=> 'provinciascontroller@destroy']);

/*------------------------LOCALIDAD------------------*/

route::get ('ortopedia/localidadesindex',['as'=>'ortopedia.localidades.index' , 'uses'=> 'localidadescontroller@index' ] );
route::get ('ortopedia/localidadescreate',['as'=>'ortopedia.localidades.create' , 'uses'=> 'localidadescontroller@create' ]);
route::get ('ortopedia/localidadesshow/{id_localidad}',['as'=>'ortopedia.localidades.show' , 'uses'=> 'localidadescontroller@show' ]);
Route::post('/ortopedia/localidadesnew',['as'=>'ortopedia.localidades.store', 'uses'=>'localidadescontroller@store']);
route::get ('ortopedia/localidadesmodificar',['as'=>'ortopedia.localidades.update' , 'uses'=> 'localidadescontroller@update' ]);
route::get ('ortopedia/localidadeseliminar/{id_localidad}',['as'=>'ortopedia.localidades.delete' , 'uses'=> 'localidadescontroller@destroy']);

/*-------Roles-------------*/
route::get ('ortopedia/rolesindex',['as'=>'ortopedia.roles.index' , 'uses'=> 'rolescontroller@index' ] );
route::get ('ortopedia/rolescreate',['as'=>'ortopedia.roles.create' , 'uses'=> 'rolescontroller@create' ]);
route::get ('ortopedia/rolesshow/{id_rol}',['as'=>'ortopedia.roles.show' , 'uses'=> 'rolescontroller@show']);
Route::post('/ortopedia/rolesnew',['as'=>'ortopedia.roles.store', 'uses'=>'rolescontroller@store']);
route::get ('ortopedia/rolesmodificar',['as'=>'ortopedia.roles.update' , 'uses'=> 'rolescontroller@update' ]);
route::get ('ortopedia/roleseliminar/{id_rol}',['as'=>'ortopedia.roles.delete' , 'uses'=> 'rolescontroller@destroy' ]);

/*-------categorias-------------*/

route::get ('ortopedia/categoriasindex',['as'=>'ortopedia.categorias.index' , 'uses'=> 'categoriascontroller@index' ] );
route::get ('ortopedia/categoriascreate',['as'=>'ortopedia.categorias.create' , 'uses'=> 'categoriascontroller@create' ]);
route::get ('ortopedia/categoriasshow/{id_categoria}',['as'=>'ortopedia.categorias.show' , 'uses'=> 'categoriascontroller@show']);
Route::post('/ortopedia/categoriasnew',['as'=>'ortopedia.categorias.store', 'uses'=>'categoriascontroller@store']);
route::get ('ortopedia/categoriasmodificar',['as'=>'ortopedia.categorias.update' , 'uses'=> 'categoriascontroller@update' ]);
route::get ('ortopedia/categoriaseliminar/{id_categoria}',['as'=>'ortopedia.categorias.delete' , 'uses'=> 'categoriascontroller@destroy' ]);

/*-------productos-------------*/

route::get ('ortopedia/productosindex',['as'=>'ortopedia.productos.index' , 'uses'=> 'productoscontroller@index' ] );
route::get ('ortopedia/productoscreate',['as'=>'ortopedia.productos.create' , 'uses'=> 'productoscontroller@create' ]);
route::get ('ortopedia/productosshow/{id_producto}',['as'=>'ortopedia.productos.show' , 'uses'=> 'productoscontroller@show']);
Route::post('/ortopedia/productosnew',['as'=>'ortopedia.productos.store', 'uses'=>'productoscontroller@store']);
route::get ('ortopedia/productosmodificar',['as'=>'ortopedia.productos.update' , 'uses'=> 'productoscontroller@update' ]);
route::get ('ortopedia/productoseliminar/{id_producto}',['as'=>'ortopedia.productos.delete' , 'uses'=> 'productoscontroller@destroy' ]);

/*-------clientes-------------*/

route::get ('ortopedia/clientesindex',['as'=>'ortopedia.clientes.index' , 'uses'=> 'clientescontroller@index' ] );
route::get ('ortopedia/clientescreate',['as'=>'ortopedia.clientes.create' , 'uses'=> 'clientescontroller@create' ]);
route::get ('ortopedia/clientesshow/{id_cliente}',['as'=>'ortopedia.clientes.show' , 'uses'=> 'clientescontroller@show']);
Route::post('/ortopedia/clientesnew',['as'=>'ortopedia.clientes.store', 'uses'=>'clientescontroller@store']);
route::get ('ortopedia/clientesmodificar',['as'=>'ortopedia.clientes.update' , 'uses'=> 'clientescontroller@update' ]);
route::get ('ortopedia/clienteseliminar/{id_cliente}',['as'=>'ortopedia.clientes.delete' , 'uses'=> 'clientescontroller@destroy' ]);

/*-------condiciones_iva-------------*/

route::get ('ortopedia/condiciones_ivaindex',['as'=>'ortopedia.condiciones_iva.index' , 'uses'=> 'condiciones_ivacontroller@index' ] );
route::get ('ortopedia/condiciones_ivacreate',['as'=>'ortopedia.condiciones_iva.create' , 'uses'=> 'condiciones_ivacontroller@create' ]);
route::get ('ortopedia/condiciones_ivashow/{id_condicion_iva}',['as'=>'ortopedia.condiciones_iva.show' , 'uses'=> 'condiciones_ivacontroller@show']);
Route::post('/ortopedia/condiciones_ivanew',['as'=>'ortopedia.condiciones_iva.store', 'uses'=>'condiciones_ivacontroller@store']);
route::get ('ortopedia/condiciones_ivamodificar',['as'=>'ortopedia.condiciones_iva.update' , 'uses'=> 'condiciones_ivacontroller@update' ]);
route::get ('ortopedia/condiciones_ivaeliminar/{id_condicion_iva}',['as'=>'ortopedia.condiciones_iva.delete' , 'uses'=> 'condiciones_ivacontroller@destroy' ]);

/*-------items_productos-------------*/

route::get ('ortopedia/items_productosindex',['as'=>'ortopedia.items_productos.index' , 'uses'=> 'items_productoscontroller@index' ] );
route::get ('ortopedia/items_productoscreate',['as'=>'ortopedia.items_productos.create' , 'uses'=> 'items_productoscontroller@create' ]);
route::get ('ortopedia/items_productosshow/{id_items_producto}',['as'=>'ortopedia.items_productos.show' , 'uses'=> 'items_productoscontroller@show']);
Route::post('/ortopedia/items_productosnew',['as'=>'ortopedia.items_productos.store', 'uses'=>'items_productoscontroller@store']);
route::get ('ortopedia/items_productosmodificar',['as'=>'ortopedia.items_productos.update' , 'uses'=> 'items_productoscontroller@update' ]);
route::get ('ortopedia/items_productoseliminar/{id_items_producto}',['as'=>'ortopedia.items_productos.delete' , 'uses'=> 'items_productoscontroller@destroy' ]);

/*-------presupuestos-------------*/

route::get ('ortopedia/presupuestosindex',['as'=>'ortopedia.presupuestos.index' , 'uses'=> 'presupuestoscontroller@index' ] );
route::get ('ortopedia/presupuestoscreate',['as'=>'ortopedia.presupuestos.create' , 'uses'=> 'presupuestoscontroller@create' ]);
route::get ('ortopedia/presupuestosshow/{id_presupuesto}',['as'=>'ortopedia.presupuestos.show' , 'uses'=> 'presupuestoscontroller@show']);
Route::post('/ortopedia/presupuestosnew',['as'=>'ortopedia.presupuestos.store', 'uses'=>'presupuestoscontroller@store']);
route::get ('ortopedia/presupuestosmodificar',['as'=>'ortopedia.presupuestos.update' , 'uses'=> 'presupuestoscontroller@update' ]);
route::get ('ortopedia/presupuestoseliminar/{id_presupuesto}',['as'=>'ortopedia.presupuestos.delete' , 'uses'=> 'presupuestoscontroller@destroy' ]);

/*-------proveedores-------------*/

route::get ('ortopedia/proveedoresindex',['as'=>'ortopedia.proveedores.index' , 'uses'=> 'proveedorescontroller@index' ] );
route::get ('ortopedia/proveedorescreate',['as'=>'ortopedia.proveedores.create' , 'uses'=> 'proveedorescontroller@create' ]);
route::get ('ortopedia/proveedoresshow/{id_proveedor}',['as'=>'ortopedia.proveedores.show' , 'uses'=> 'proveedorescontroller@show']);
Route::post('/ortopedia/proveedoresnew',['as'=>'ortopedia.proveedores.store', 'uses'=>'proveedorescontroller@store']);
route::get ('ortopedia/proveedoresmodificar',['as'=>'ortopedia.proveedores.update' , 'uses'=> 'proveedorescontroller@update' ]);
route::get ('ortopedia/proveedoreseliminar/{id_proveedor}',['as'=>'ortopedia.proveedores.delete' , 'uses'=> 'proveedorescontroller@destroy' ]);


/*-------detalles_presupuestos-------------*/

route::get ('ortopedia/detalles_presupuestosindex',['as'=>'ortopedia.detalles_presupuestos.index' , 'uses'=> 'detalles_presupuestoscontroller@index' ] );
route::get ('ortopedia/detalles_presupuestoscreate',['as'=>'ortopedia.detalles_presupuestos.create' , 'uses'=> 'detalles_presupuestoscontroller@create' ]);
route::get ('ortopedia/detalles_presupuestosshow/{id_detalle_presupuesto}',['as'=>'ortopedia.detalles_presupuestos.show' , 'uses'=> 'detalles_presupuestoscontroller@show']);
Route::post('/ortopedia/detalles_presupuestosnew',['as'=>'ortopedia.detalles_presupuestos.store', 'uses'=>'detalles_presupuestoscontroller@store']);
route::get ('ortopedia/detalles_presupuestosmodificar',['as'=>'ortopedia.detalles_presupuestos.update' , 'uses'=> 'detalles_presupuestoscontroller@update' ]);
route::get ('ortopedia/detalles_presupuestoseliminar/{id_detalle_presupuesto}',['as'=>'ortopedia.detalles_presupuestos.delete' , 'uses'=> 'detalles_presupuestoscontroller@destroy' ]);


/*-------alquileres-------------*/

route::get ('ortopedia/alquileresindex',['as'=>'ortopedia.alquileres.index' , 'uses'=> 'alquilerescontroller@index' ] );
route::get ('ortopedia/alquilerescreate',['as'=>'ortopedia.alquileres.create' , 'uses'=> 'alquilerescontroller@create' ]);
route::get ('ortopedia/alquileresshow/{id_alquiler}',['as'=>'ortopedia.alquileres.show' , 'uses'=> 'alquilerescontroller@show']);
Route::post('/ortopedia/alquileresnew',['as'=>'ortopedia.alquileres.store', 'uses'=>'alquilerescontroller@store']);
route::get ('ortopedia/alquileresmodificar',['as'=>'ortopedia.alquileres.update' , 'uses'=> 'alquilerescontroller@update' ]);
route::get ('ortopedia/alquilereseliminar/{id_alquiler}',['as'=>'ortopedia.alquileres.delete' , 'uses'=> 'alquilerescontroller@destroy' ]);

/*-------alquileres_productos-------------*/

route::get ('ortopedia/alquileres_productosindex',['as'=>'ortopedia.alquileres_productos.index' , 'uses'=> 'alquileres_productoscontroller@index' ] );
route::get ('ortopedia/alquileres_productoscreate',['as'=>'ortopedia.alquileres_productos.create' , 'uses'=> 'alquileres_productoscontroller@create' ]);
route::get ('ortopedia/alquileres_productosshow/{id_alquiler_producto}',['as'=>'ortopedia.alquileres_productos.show' , 'uses'=> 'alquileres_productoscontroller@show']);
Route::post('/ortopedia/alquileres_productosnew',['as'=>'ortopedia.alquileres_productos.store', 'uses'=>'alquileres_productoscontroller@store']);
route::get ('ortopedia/alquileres_productosmodificar',['as'=>'ortopedia.alquileres_productos.update' , 'uses'=> 'alquileres_productoscontroller@update' ]);
route::get ('ortopedia/alquileres_productoseliminar/{id_alquiler_producto}',['as'=>'ortopedia.alquileres_productos.delete' , 'uses'=> 'alquileres_alquilerescontroller@destroy' ]);


/*-------turnos-------------*/
route::get ('ortopedia/turnosindex',['as'=>'ortopedia.turnos.index' , 'uses'=> 'turnoscontroller@index' ] );
route::get ('ortopedia/turnoscreate',['as'=>'ortopedia.turnos.create' , 'uses'=> 'turnoscontroller@create' ]);
route::get ('ortopedia/turnosshow/{id_turno}',['as'=>'ortopedia.turnos.show' , 'uses'=> 'turnoscontroller@show']);
Route::post('/ortopedia/turnosnew',['as'=>'ortopedia.turnos.store', 'uses'=>'turnoscontroller@store']);
route::get ('ortopedia/turnosmodificar',['as'=>'ortopedia.turnos.update' , 'uses'=> 'rolescontroller@update' ]);
route::get ('ortopedia/turnoseliminar/{id_turno}',['as'=>'ortopedia.turnos.delete' , 'uses'=> 'turnoscontroller@destroy' ]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');