package com.cle.pythonfromjava;

import android.app.Activity;
import android.os.Bundle;
import android.content.res.AssetManager;

import java.io.IOException;
import java.io.InputStream;

import com.srplab.www.starcore.*;

public class PytonfromjavaActivity extends Activity {
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        
        //--init CLE
        StarCoreFactoryPath.InitDefault(Runtime.getRuntime(),
			"/data/data/com.cle.pythonfromjava");
        
StarCoreFactory starcore= StarCoreFactory.GetFactory();
StarServiceClass Service=starcore._InitSimple("test","123",0,0);
Service._CheckPassword(false);

AssetManager assetManager = getAssets();     

        try{
            String pythonbuf;
            
               InputStream dataSource = assetManager.open("code.py");
               int size=dataSource.available();
               byte[] buffer=new byte[size]; 
               dataSource.read(buffer); 
               dataSource.close();        
               pythonbuf=new String(buffer);
               
            Service._RunScript("python",pythonbuf,"cmd","");
        }
        catch(IOException e ){
        }   
        
StarObjectClass a = Service._GetObject("TestClass")._New()._Assign(new StarObjectClass(){
   public int JavaAdd(StarObjectClass self,int x,int y){
       System.out.println("Call java function...");
       return x+y;
   }
});
        a._Set("JavaValue",100);
        System.out.println(a._Get("PythonValue")); 
        System.out.println(a._Call("PythonAdd",12,34));           
        a._Call("PythonPrint",56,78);
    }

}