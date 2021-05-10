<template>
    <div class="container">
        <div style="margin: 10px;">
            <a data-toggle="modal" data-target="#exampleModal" href="">Создать фильтр</a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Фильтр</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/" method="POST" @submit.prevent="PostMethod">
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[0]" value="0">
                                    <label class="col-sm-2 col-form-label colname">ID</label>
                                    <select class="col-sm-2 form-control colequal" v-model="select[0]">
                                        <option value="equal">equal</option>
                                        <option value="more">more</option>
                                        <option value="less">less</option>
                                    </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[0]">
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[1]" value="1">
                                    <label class="col-sm-2 col-form-label colname">Name</label>
                                    <select class="col-sm-2 form-control colequal" name="select[]" v-model="select[1]">
                                        <option value="equal" >equal</option>
                                        <option value="more">like</option>
                                        </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[1]">
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[2]" value="2">
                                    <label class="col-sm-2 col-form-label colname">Article</label>
                                    <select class="col-sm-2 form-control colequal" name="select[]" v-model="select[2]">
                                        <option value="equal" >equal</option>
                                        <option value="more">like</option>
                                        </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[2]">
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[3]" value="3">
                                    <label class="col-sm-2 col-form-label colname">Category</label>
                                    <label class="col-sm-2 col-form-label colequal">Select</label>
                                    <input style="display: none" name="column_val[]" v-model="column_val[3]" value="None">
                                    <input style="display: none" name="select[]" v-model="select[3]" value="None">
                                    <div class="col-sm-2 dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <label class="dropdown-item" v-for="(category,index) in categories">
                                                <input type="checkbox" name="cat_check[]" v-model="cat_check[index]"> {{category.category}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[4]" value="4">
                                    <label class="col-sm-2 col-form-label colname">Weight</label>
                                    <select class="col-sm-2 form-control colequal" name="select[]" v-model="select[4]">
                                        <option value="equal" >equal</option>
                                        <option value="more">more</option>
                                        <option value="less">less</option>
                                        </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[4]">
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[5]" value="5">
                                    <label class="col-sm-2 col-form-label colname">Price</label>
                                    <select class="col-sm-2 form-control colequal" name="select[]" v-model="select[5]">
                                        <option value="equal" >equal</option>
                                        <option value="more">more</option>
                                        <option value="less">less</option>
                                        </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[5]">
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[6]" value="6">
                                    <label class="col-sm-2 col-form-label colname">Status</label>
                                    <label class="col-sm-2 col-form-label colequal">Select</label>
                                    <input style="display: none" name="column_val[]" v-model="column_val[6]" value="None">
                                    <input style="display: none" name="select[]" v-model="select[6]" value="None">
                                    <div class="col-sm-2 dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <label class="dropdown-item" v-for="(status,index) in statuses">
                                                <input type="checkbox" name="stat_check[]"  v-model="stat_check[index]"> {{status.status}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modaldiv row">
                                    <input class="colcheck" type="checkbox" name="check[]" v-model="check[7]" value="7">
                                    <label class="col-sm-2 col-form-label colname">Added date</label>
                                    <select class="col-sm-2 form-control colequal" name="select[]" v-model="select[7]">
                                        <option value="equal" >equal</option>
                                        <option value="later">later</option>
                                        <option value="earlier">earlier</option>
                                    </select>
                                    <input class="form-control" name="column_val[]" v-model="column_val[7]">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" >ID<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Name<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Article<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Category<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Weight<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Price<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Status<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Added date<img class="float-right" style="width: 15px;"/></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products">
                    <th scope="row">{{product.id}}</th>
                    <td>{{product.name}}</td>
                    <td>{{product.article}}</td>
                    <td>{{product.category}}</td>
                    <td>{{product.weight}}</td>
                    <td>{{product.price}}</td>
                    <td>{{product.status}}</td>
                    <td>{{product.created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data:function(){
            return {
                    products:[],
                    statuses:[],
                    categories:[],
                    check:[],
                    select:[],
                    stat_check:[],
                    cat_check:[],
                    column_val:[]
                }
        },
        mounted() {
            var app = this;
            axios.get('/api')
                .then(function (resp) {
                    app.products = resp.data.products;
                    app.statuses = resp.data.statuses;
                    app.categories = resp.data.categories;
                    for(var i=0;i<app.products.length;i++){
                            app.check.push(false);
                            app.select.push('equal');
                        }
                    for(var i=0;i<app.statuses.length;i++)
                        app.stat_check.push(false);
                    for(var i=0;i<app.categories.length;i++)
                        app.cat_check.push(false);
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Error this get");
                });
        },
        methods:{
            PostMethod(){
                var app = this;
                axios.post('/api',{
                    select: this.select,
                    stat_check: this.stat_check,
                    cat_check: this.cat_check,
                    check: this.check,
                    column_val: this.column_val,
                    statuses: this.statuses,
                    categories: this.categories
                })
                .then(function (resp) {
                    app.products = resp.data.products;
                    app.statuses = resp.data.statuses;
                    app.categories = resp.data.categories;
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>
