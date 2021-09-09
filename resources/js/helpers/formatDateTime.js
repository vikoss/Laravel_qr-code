const formatDate = (date) => {
  let year = date.getFullYear();
  // getMonth() es un entero entre 0 y 11
  let month = (date.getMonth() + 1);
  let day = date.getDate();
  month = `${month}`.length < 2 ? `0${month}` : month;
  day = `${day}`.length < 2 ? `0${day}` : day;

  return `${year}-${month}-${day}`;
};

export { formatDate };
