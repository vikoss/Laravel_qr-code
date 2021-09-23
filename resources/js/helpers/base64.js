const encodeBase64 = (binary) => window.btoa(binary);

const decodeBase64 = (binary) => window.atob(binary);


/* const encodeFileBase64 = file => new Promise((resolve, reject) => {
  const fileReader = new FileReader();
  fileReader.readAsDataURL(file);
  fileReader.onload = () => resolve(fileReader.result);
  fileReader.onerror = error => reject(error);
}); */

const encodeFileBase64 = file => new Promise((resolve, reject) => {
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = () => resolve(reader.result);
  reader.onerror = error => reject(error);
});

export { decodeBase64, encodeBase64, encodeFileBase64 };
