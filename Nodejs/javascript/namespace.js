// global namespace
var rz = rz || {}

// sub namespace
rz.sub = {}

rz.custom = {
  name: "",
  value: "",
  speak: function(){
    console.log(this.name)
    console.log(this.value)
  }
}

rz.custom.name = "hello"
rz.custom.value = "world"
rz.custom.speak()

