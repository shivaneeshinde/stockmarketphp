SrvGroup = libstarpy._GetSrvGroup()

Service = SrvGroup._GetService("","")

#Create objects
Obj=Service._New("TestClass");

#Define functions
def Obj_PythonAdd(self,x,y) :
    print("Call python function...");
    return x+y;
Obj.PythonAdd = Obj_PythonAdd;

#Call java functions
def Obj_PythonPrint(self,x,y) :
    print( "Value defined in java is ",self.JavaValue );
    print( "Function result from java ",self.JavaAdd(x,y) );
Obj.PythonPrint = Obj_PythonPrint;

#define Attributes
Obj.PythonValue = 200;