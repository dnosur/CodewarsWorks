// <5 kuy> - Pete, the baker
//https://www.codewars.com/kata/525c65e51bf619685c000059

function cakes(recipe, available) {
  let res = 0;
    
  for(ing in recipe){
    if(!available[ing]) {
      return res;
    }
    else{
      available[ing] /= recipe[ing];
      
      if(available[ing] <= 0) return res;
      if(!res || res > available[ing]) res = available[ing];
    }
  } 
  return Math.trunc(res);
}

