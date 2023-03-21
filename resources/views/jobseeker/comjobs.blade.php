@extends ('layouts.user')
@section('content')

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />

  <link href="http://code.jquery.com/ui/1.11.2/themes/cupertino/jquery-ui.css" rel="Stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js" type="text/javascript"></script>

  
  <style>
    .hasDatepicker {
  width: 100px;
  text-align: center;
}
.ui-datepicker * {
  font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;
  font-size: 14px;
  font-weight: 300 !important;
}
  </style>
  <div class="page-wrapper">
          
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">All jobs</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">All jobs</h1> 
            </div>
            
        </div>
    </div>
   
    <div class="container-fluid">
       <div class="row">
        <div id="grid_table"></div>
       </div>
  
        
    </div>
  
</div>

<script>
    var db = {
    loadData: function (filter) {
      return $.grep(this.clients, function (client) {
        return (
          (!filter.ID || client.Name.indexOf(filter.ID) > -1) &&
          (!filter.Job_Title || client.Job_Title.indexOf(filter.Job_Title) > -1) &&
          (!filter.Pincode || client.Pincode.indexOf(filter.Pincode) > -1) &&
          (!filter.Mobile || client.Mobile.indexOf(filter.Mobile) > -1) &&
          (!filter.Area || client.Area.indexOf(filter.Area) > -1) &&
          (!filter.Email || client.Email.indexOf(filter.Email) > -1) &&
          (!filter.Mode || client.Mode.indexOf(filter.Mode) > -1) &&
          (!filter.Segment || client.Segment.indexOf(filter.Segment) > -1) &&
          (!filter.Any_other_details || client.Any_other_details.indexOf(filter.Any_other_details) > -1) &&
          (!filter.Gender || client.Gender === filter.Gender)
          
        );
      });
    },

    
  };
  window.db = db;
  db.clients =  [
    {
    ID: "1",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Mode: "Offline",
    Segment: "content editor",
    Any_other_details: "54",
    Gender: "Online",
  },
  {
    ID: "2",
    Date: "5/21/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Mode: "Offline",
    Segment: "technical writer",
    Any_other_details: "32",
    Gender: "FeOnline",
  },
  {
    ID: "3",
    Date: "7/12/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Mode: "Online",
    Segment: "copy editor",
    Any_other_details: "45",
    Gender: "Online",
  },
  {
    ID: "4",
    Date: "9/2/2023",
    Job_Title: "journalist",
    Pincode: 600002,
    Mobile: "7788996655",
    Area: "north",
    Email: "d@m.com",
    Mode: "Online",
    Segment: "news editor",
    Any_other_details: "28",
    Gender: "FeOnline",
  },
  {
    ID: "5",
    Date: "11/8/2023",
    Job_Title: "content writer",
    Pincode: 400001,
    Mobile: "7766554433",
    Area: "south",
    Email: "e@z.com",
    Mode: "Online",
    Segment: "article editor",
    Any_other_details: "39",
    
  },
  {
    ID: "6",
    Date: "1/19/2024",
    Job_Title: "reporter",
    Pincode: 500001,
    Mobile: "9988776655",
    Area: "east",
    Email: "f@q.com",
    Mode: "Online",
    Segment: "broadcast editor",
    Any_other_details: "26",
    
  },
  {
    ID: "7",
    Date: "3/8/2024",
    Job_Title: "copywriter",
    Pincode: 641004,
    Mobile: "8877665544",
    Area: "west",
    Email: "g@p.com",
    Mode: "Offline",
    Segment: "advertising editor",
    Any_other_details: "41",
    
  },
    {
        Id:"7",
      Date: "3/16/2023",
      Job_Title: "editor",
      Pincode: 700124,
      Mobile: "1234567890",
      Area: "south",
      Email: "a@g.com",
      Mode: "Offline",
      Segment: "content editor",
      Any_other_details: "54",
      
    },
    {
    Id: "8",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Mode: "Offline",
    Segment: "content editor",
    Any_other_details: "54",
    
  },
  {
    Id: "9",
    Date: "5/5/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Mode: "Offline",
    Segment: "technical writer",
    Any_other_details: "32",
    
  },
  {
    Id: "10",
    Date: "7/23/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Mode: "Online",
    Segment: "copy editor",
    Any_other_details: "45",
    
  },
  {
    Id: "11",
    Date: "9/18/2023",
    Job_Title: "journalist",
    Pincode: 600002,
    Mobile: "7788996655",
    Area: "north",
    Email: "d@m.com",
    Mode: "Online",
    Segment: "news editor",
    Any_other_details: "28",
    
  },
  {
    Id: "12",
    Date: "11/1/2023",
    Job_Title: "content writer",
    Pincode: 400001,
    Mobile: "7766554433",
    Area: "south",
    Email: "e@z.com",
    Mode: "Online",
    Segment: "article editor",
    Any_other_details: "39",
    
  },
  {
    ID: "13",
    Date: "1/19/2024",
    Job_Title: "reporter",
    Pincode: 500001,
    Mobile: "9988776655",
    Area: "east",
    Email: "f@q.com",
    Mode: "Online",
    Segment: "broadcast editor",
    Any_other_details: "26",
    
  },
  {
    ID: "14",
    Date: "3/8/2024",
    Job_Title: "copywriter",
    Pincode: 641004,
    Mobile: "8877665544",
    Area: "west",
    Email: "g@p.com",
    Mode: "Offline",
    Segment: "advertising editor",
    Any_other_details: "41",
    
  },
    {
        Id:"15",
      Date: "3/16/2023",
      Job_Title: "editor",
      Pincode: 700124,
      Mobile: "1234567890",
      Area: "south",
      Email: "a@g.com",
      Mode: "Offline",
      Segment: "content editor",
      Any_other_details: "54",
      
    },
    {
    Id: "16",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Mode: "Offline",
    Segment: "content editor",
    Any_other_details: "54",
    
  },
  {
    Id: "17",
    Date: "5/5/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Mode: "Offline",
    Segment: "technical writer",
    Any_other_details: "32",
    
  },
  {
    Id: "18",
    Date: "7/23/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Mode: "Online",
    Segment: "copy editor",
    Any_other_details: "45",
    
  },
    
  ];
  db.mode = [
    { Name: "", Id: '' },
     { Name: "Online", Id: 'Online' },
     { Name: "Offline", Id: 'Offline' },
  ];
 
    var MyDateField = function(config) {
    jsGrid.Field.call(this, config);
};
 
MyDateField.prototype = new jsGrid.Field({
 
    css: "date-field",            // redefine general property 'css'
    align: "center",              // redefine general property 'align'
 
    myCustomProperty: "foo",      // custom property
 
    sorter: function(date1, date2) {
        return new Date(date1) - new Date(date2);
    },
 
    itemTemplate: function(value) {
        return new Date(value).toDateString();
    },
 
    insertTemplate: function(value) {
        return this._insertPicker = $("<input>").datepicker({ defaultDate: new Date() });
    },
 
    editTemplate: function(value) {
        return this._editPicker = $("<input>").datepicker().datepicker("setDate", new Date(value));
    },
 
    insertValue: function() {
        return this._insertPicker.datepicker("getDate").toISOString();
    },
 
    editValue: function() {
        return this._editPicker.datepicker("getDate").toISOString();
    }
});
 
jsGrid.fields.date = MyDateField;
 
    $('#grid_table').jsGrid({

     width: "100%",
     height: "auto",
     filtering: true,
        sorting: true,
        paging: true,
        autoload: true,
        
        pageSize: 15,
        pageButtonCount: 5,
     deleteConfirm: "Do you really want to delete data?",

    // controller: {
       // ajax data load from database////////////////////////////////
    //   loadData: function(filter){
    //    return $.ajax({
    //     type: "GET",
    //     url: "fetch_data.php",
    //     data: filter
    //    });
    //   },
      
     //},
     headerRowRenderer: function () {
      var $result = $("<tr>").height(0)
        .append($("<th>").width(50))
        .append($("<th>").width(50))
        .append($("<th>").width(30))  
        .append($("<th>").width(70))
        .append($("<th>").width(50))
        .append($("<th>").width(50))
        .append($("<th>").width(50))
          .append($("<th>").width(50))
        .append($("<th>").width(50))
        .append($("<th>").width(50))  
        .append($("<th>").width(70));
      $result = $result.add($("<tr>")
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Status"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Date"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("ID"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Segment"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Job_Title"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Area"))
          .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Pincode"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Mobile"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Email"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Mode"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Any_other_details")));
           return $result;
      },
     controller: db,
     fields: [
      {
    type: "control", editButton: false, deleteButton: false,
    itemTemplate: function(value, item) {
        var $iconPencil = "Completed";
      //    color: black;
    //font-size: 2.5em;
    //$("<i>").attr({class: "mdi mdi-arrow-right-box",style:"color:black;font-size: 2.5em;"});

        var $customEditButton = $("<button>")
            .attr({class: "btn btn-warning btn-xs"})
            .attr({role: "button"})
            .attr({title: jsGrid.fields.control.prototype.editButtonTooltip})
            .attr({id: "btn-edit-" + item.ID})
            .click(function(e) {
                alert("ID: " + item.ID);
                // document.Mode.href = item.id + "/edit";
                e.stopPropagation();
            })
            .append($iconPencil);
       

        return $("<div>").attr({class: "btn-toolbar"})
            .append($customEditButton);
            
    },

},
      
      {
       name: "Date", 
       type: "date", myCustomProperty: "bar" ,
    width: 50, 
    
      },
      {
       name: "ID",
    type: "number",
    width:30,
    
      },
      {
       name: "Segment", 
    type: "text", 
    width: 70, 
    validate: "required"
      },
      {
       name: "Job_Title", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Area", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Pincode", 
    type: "number", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Mobile", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      
      {
       name: "Email", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Mode", 
       type: "select", items: db.mode,valueField: "Id", textField: "Name",
    width: 50
      },
      
      {
       name: "Any_other_details", 
    type: "text", 
    width: 70, 
    
      }
    
     ]

    });

</script>
<script>
  

    </script>
    @stop
          

