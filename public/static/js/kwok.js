/**
 * 自封装js
 * @type {{msg: dialog.msg, confirm: dialog.confirm, toconfirm: dialog.toconfirm, success: dialog.success, error: dialog.error, msg_url: dialog.msg_url}}
 */
var kwok = {

    /**
     * 更新bootstrap select 下拉菜单
     * @param domId 要更新的select标签id
     * @param ajaxUrl 要请求的url
     */
    selectAjaxUpdate: function(dom,ajaxUrl,temp_dom="",isMsg=1){
        $.ajax({
            cache:false,
            type: 'post',
            url: ajaxUrl,
            dataType: 'json',
            timeout:3000,
            success: function (res) {
                if (res.status == 1) {
                    //清空所操作的select
                    dom.empty();
                    //单独保存data
                    var data = res['data'];
                    //保存数组长度
                    var count = data.length;
                    //临时变量
                    var i = 0;
                    //保存临时代码
                    for(i=0;i<count;i++){
                        temp_dom+="<option value='"+data[i].id+"'>"+data[i].id+" ："+data[i].name+"</option>";
                    }
                    dom.append(temp_dom);
                    dom.selectpicker("refresh");
                    if (isMsg){
                        kwok.msg('更新成功');
                    }
                } else {
                    kwok.error(res.message);
                }
            }

        })
    },
    test: function(dom){
        console.log(dom.length());
    },

    /**
     * datatables.js分组数据表的初始化方法
     * @param tablesDom tables标签的dom变量 一般用$("#table")选择
     * @param defaultGroupColums 默认分组列下标,以0开始,默认为1
     * @param defaultOrderColums 默认排序列下标,以0开始,默认为1(默认等于分组下标一样)
     * @param displayLength 每页显示长度,默认25
     */
    dataTablesInit: function(tableDom,defaultGroupColums=1,defaultOrderColums=defaultGroupColums,displayLength=25,){
        var table = tableDom.DataTable({

            //中文
            language: {
                "sProcessing": "处理中...",
                "sLengthMenu": "显示 _MENU_ 项结果",
                "sZeroRecords": "没有匹配结果",
                "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                "sInfoPostFix": "",
                "sSearch": "搜索:",
                "sUrl": "",
                "sEmptyTable": "表中数据为空",
                "sLoadingRecords": "载入中...",
                "sInfoThousands": ",",
                "oPaginate": {
                    "sFirst": "首页",
                    "sPrevious": "上页",
                    "sNext": "下页",
                    "sLast": "末页"
                },
                "oAria": {
                    "sSortAscending": ": 以升序排列此列",
                    "sSortDescending": ": 以降序排列此列"
                }
            },
            "columnDefs": [
                {"visible": false, "targets": defaultGroupColums}
            ],
            "order": [[defaultOrderColums, 'asc']],
            "displayLength": displayLength,
            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({page: 'current'}).nodes();
                //获取当前页面上的列，并保存其长度(也就是列的数量)
                var columsLength = api.columns({page: 'current'}).nodes().length;
                var last = null;
                api.column(1, {page: 'current'}).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="group"><td colspan="' + columsLength + '">' + group + '</td></tr>'
                        );

                        last = group;
                    }
                });
            },
        });

        // 按分组排序
        // 操作tableDom下的tbody标签
        tableDom.children('tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === defaultGroupColums && currentOrder[1] === 'asc') {
                table.order([defaultGroupColums, 'desc']).draw();
            } else {
                table.order([defaultGroupColums, 'asc']).draw();
            }
        });
    },

    /**
     * form表单的Ajax提交
     * @param formDom form标签的dom
     * @param apiUrl 提交到的接口
     */
    formAjaxSubmit: function(formDom,ajaxUrl){
        $.ajax({
            type: 'post',
            url: ajaxUrl,
            data: formDom.serialize(),//注意form表单内标签必须以有name属性
            dataType: 'json',
            success: function (data) {
                if (data.status == 1) {
                    kwok.msg(data.message);
                    //表单清空初始化
                    formDom[0].reset();
                } else {
                    kwok.error(data.message);
                }
            }

        })
    },

    // 消息提示
    msg: function(message) {
        layer.msg(message);
    },

    // 消息提示 + 跳转
    msg_url: function(message,url) {
        layer.msg(message);
        setTimeout(function(){window.location.href=url;}, 2000);
    },
    // 错误弹出层
    error: function(message) {
        layer.open({
            content:message,
            icon:2,
            title:'错误提示',
        });
    },

    // 成功弹出层
    success:function(message,url){
        layer.open({
            content:message,
            icon:1,
            yes:function(){
                location.href=url;
            },
        });
    },

    // 确认弹出层
    confirm:function(message,url){
        layer.open({
            content:message,
            icon:3,
            btn:['是','否'],
            yes:function(){
                location.href=url;
            },
        });
    },

    // 无需跳转到指定页面的确认弹出层
    toconfirm:function(message){
        layer.open({
            content:message,
            icon:3,
            btn:['确定'],
        });
    },
}