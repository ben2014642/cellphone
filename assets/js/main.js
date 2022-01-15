// const inputCategories = document.querySelectorAll('#title_category');
// inputCategories.forEach(ele => {
//     ele.addEventListener('click', function (e) {
//         update_category()
//     })
// });

function update_category(id) {
    Swal.fire({
        title: 'Bạn có muốn cập nhật lại những thay đổi này?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Lưu',
        denyButtonText: `Không lưu`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            
            var options = document.getElementById('status_category');
            var vlOp = options.value;
            var u_title = document.getElementById('title_category-'+id).value
            var arr = {
                action: "update",
                id : id,
                title : u_title,
                status : vlOp,
            }
            var json_arr = JSON.stringify(arr);
            $.ajax({
                url : "modules/ajax.php",
                type : "post",
                dataType:"text",
                data : {
                arr: json_arr
            },
            success : function (result){
                if (result == "ok") {
                    Swal.fire('Lưu thành công!', '', 'success')
                    setTimeout(function () {
                        location.reload();
                    },2000)
                } else {
                    Swal.fire('Xảy ra lỗi!', '', 'error')
                }
            }
            });
        }
        else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
        })
}

function delete_category(id) {
    Swal.fire({
        title: 'Bạn có chắc chắn muốn xoá?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Xoá',
        denyButtonText: `Huỷ`,
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var arr = {
                action: "delete",
                id : id,
            }
            var json_arr = JSON.stringify(arr);
        $.ajax({
            url : "modules/ajax.php",
            type : "post",
            dataType:"text",
            data : {
            arr : json_arr
        },
        success : function (result){
            if (result == "ok") {
                Swal.fire('Xoá thành công!', '', 'success')
                setTimeout(function(){
                    location.reload();
                }, 2000)
            } 
            else {
                Swal.fire('Xảy ra lỗi!', '', 'error')
            }
        }
        });
        }else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
        }
    })
}

function add_category() {
    Swal.fire({
        title: "Thêm một danh mục",
        text: "Write something interesting:",
        input: 'select',
        inputOptions: {
            '0' : 'Ẩn',
            '1': 'Hiển thị'
        },
        inputPlaceholder: 'Trạng thái hiển thị',
        html:
        '<input placeholder="Nhập tiêu đề danh mục" id="swal-input1" class="swal2-input">'
        ,
        showCancelButton: true        
    }).then((result) => {
        let vl1 = document.getElementById('swal-input1').value
        if (result.value) {
            var arr = {
                action: "add",
                title: vl1,
                status: result.value
            }
            var json_arr = JSON.stringify(arr);
            $.ajax({
                url : "modules/ajax.php",
                type : "post",
                dataType:"text",
                data : {
                arr : json_arr
            },
            success : function (result){
                alert(result)
                if (result == "ok") {
                    Swal.fire('Thêm thành công!', '', 'success')
                    setTimeout(function(){
                        location.reload();
                    }, 2000)
                } 
                else {
                    Swal.fire('Xảy ra lỗi!', '', 'error')
                }
            }
            });
        }
    });
    
}

function update_product(id) {
    var arrData = [];
    var arrImages = JSON.stringify(getImages());
    arrImages = "'"+arrImages+"'";
    const nameTskt = document.querySelectorAll('.name-tskt');
    const valueTskt = document.querySelectorAll('.value-tskt');
    let tam = 0;
    nameTskt.forEach(ele => {
        var obj = {
            "name" : ele.value,
            "value" : valueTskt[tam].value
        }
        arrData.push(obj);
        
        tam++;
    });
    arrData = JSON.stringify(arrData);
    var txtConvert = "'"+arrData+"'";
    Swal.fire({
        title: 'Bạn có muốn cập nhật lại những thay đổi này?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Lưu',
        denyButtonText: `Không lưu`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var arr = {
                action: "update_product",
                id : id,
                title : $('#title-product').val(),
                price : $('#price-new').val(),
                price_old : $('#price-old').val(),
                sale : $('#sale-product').val(),
                img : $('#img-product').val(),
                des : $('#des-product').val(),
                category: $('#category :selected').val(),
                tskt: txtConvert,
                images : arrImages
            }
            var json_arr = JSON.stringify(arr);
            console.log(json_arr);
            console.log(json_arr.tskt);
            $.ajax({
                url : "modules/ajax.php",
                type : "post",
                dataType:"text",
                data : {
                arr: json_arr
                
            },
            success : function (result){
                console.log(result);
                if (result == "ok") {
                    Swal.fire('Lưu thành công!', '', 'success')
                    setTimeout(function () {
                        location.reload();
                    },2000)
                } else {
                    Swal.fire('Xảy ra lỗi!', '', 'error')
                }
            }
            });
        }
        else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
        })
}

function add_product(id) {
    Swal.fire({
        title: 'Bạn có muốn cập nhật lại những thay đổi này?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Lưu',
        denyButtonText: `Không lưu`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
           
            var arr = {
                action: "add_product",
                id : id,
                title : $('#title-product').val(),
                price : $('#price-new').val(),
                price_old : $('#price-old').val(),
                sale : $('#sale-product').val(),
                img : $('#img-product').val(),
                des : $('#des-product').val(),
                category: $('#category :selected').val()
            }
            var json_arr = JSON.stringify(arr);
            $.ajax({
                url : "modules/ajax.php",
                type : "post",
                dataType:"text",
                data : {
                arr: json_arr
            },
            success : function (result){
                if (result == "ok") {
                    Swal.fire('Thêm thành công!', '', 'success')
                    setTimeout(function () {
                        location.reload();
                    },2000)
                } else {
                    Swal.fire('Xảy ra lỗi!', '', 'error')
                }
            }
            });
        }
        else if (result.isDenied) {
            Swal.fire('Huỷ thêm sản phẩm', '', 'info')
        }
        })
}




function showTskt(id) {
    var html = '';
    const step1Div = document.querySelector('.step-1');
    const step2Div = document.querySelector('.step-2');
    let productAPI = 'http://127.0.0.1/cellphone/admin/modules/api_product.php?id='+id;
    fetch(productAPI)
    .then(res => res.json())
    .then(data => {

        data.forEach(item => {
            p3 = {
                ...item
            }
            html += `
            <tr>
                <td scope="row"><input class="name-tskt" type="text" disabled value="${item.name}" ></td>
                <td><input type="text" class="value-tskt" value="${item.value}"></td>
            </tr>
            `
        });
        // console.log(tskt);
        document.querySelector('#body_table').innerHTML = html;
    })
    document.getElementById('next-step').style.display = "none";
    document.getElementById('save-step').style.display = "inline-block";
    step1Div.style.display = "none";
    step2Div.style.display = "block";
}

function getTskt() {
    var arrData = {}
    var temp = []
    // var arrData = [];
    // arrData['tskt'] = []
    const nameTskt = document.querySelectorAll('.name-tskt');
    const valueTskt = document.querySelectorAll('.value-tskt');
    let valueLeng = valueTskt.length
    let tam = 0;
    nameTskt.forEach(ele => {
        var obj = {
            "name" : ele.value,
            "value" : valueTskt[tam].value
        }
        // arrData['tskt'].push(obj);
        temp.push(obj);
                
        tam++;
    });
    arrData = Object.assign(temp)
    return arrData
}

function getImages() {
    
    var images_data = []
    var txtImage = document.querySelector('#images').value
    var splitTxt = txtImage.split(",");
    splitTxt.forEach(ele => {
        ele = ele.replace(/(\r\n|\n|\r)/gm,""); // xoá ký tự ngắt dòng
        ele = ele.replace(/\s/g, ''); // xoá all khoảng trắng
        ele = ele.split('"').join('');
        images_data.push(ele);
    })

    return images_data
}

