function mtime(){
                var date = new Date();
                var h = date.getHours();
                var m = date.getMinutes();
                
                var s = date.getSeconds();
                var sesion = "am";
               
                    if(h == 0){
                        
                        h = 12;
                    }
                    
                    if( h > 12){
                        
                        h = h -12;
                        sesion = "pm";
                    }
                    
                    h = (h < 10)? "0" + h:h;
                    m = (m < 10)? "0" + m:m;
                    s = (s < 10)? "0" + s:s;  
                var t = h + ":" + m + ":" + s + " " + sesion;
               
                    document.getElementById("Reloj").innerText = t;
                      document.getElementById("Reloj").textContent = t;
                    setTimeout(mtime,1000);
                    }
                    
                    
                        mtime();