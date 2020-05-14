{
    const data = fetch('https://kodaktor.ru/j/rates').then(x => x.json);
    console.log(data);
}