function añobis(year) {
    // Funcion auxiliar para verificar si un año es bisiesto
    return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
  }
  
  function getLastDayOfMonth(year, month) {
    if (month < 0 || month > 11) {
      throw new Error('El valor de month debe estar entre 0 y 11.');
    }
  
    if (month === 1) { // Febrero
      return añobis(year) ? 29 : 28;
    } else if ([0, 2, 4, 6, 7, 9, 11].includes(month)) { // Meses con 31 dias
      return 31;
    } else { // Meses con 30 días
      return 30;
    }
  }
  
  alert(getLastDayOfMonth(2012, 1)); // 29 (febrero, año bisiesto)
  alertg(getLastDayOfMonth(2023, 3)); // 30 (abril, no bisiesto)
  