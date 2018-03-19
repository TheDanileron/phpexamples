"use strict";

function pow(x,n){
  if(n<0 || Math.round(n)!=n){
	return NaN;
  }
  if(n == 0){
  	return 1;
  }
 if(n!=1){
 	return x * pow(x,n-1);
 }else{
 	return x;
 }
}
