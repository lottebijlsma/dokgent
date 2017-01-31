(() => {

  // const fetchDate = () => {
  //   fetch(`index.php?t=${Date.now()}`, {
  //     headers: new Headers({
  //       Accept: `application/json`
  //     })
  //   })
  //   .then(r => r.json())
  //   .then(res => {
  //     console.log(res);
  //   })
  //   .catch(e => console.error(e));
  // };



  const $form = document.forms[0];

  const onSubmit = e => {
    console.log(`onSubmit`);
    e.preventDefault();
    if ($form.checkValidity() === true) {
      console.log(`Goed gedaan vriend`);
      $form.submit();
    } else {
      console.log(`Oei je bent iets vergeten`);
      checkEmail(document.getElementById(`email`));
    }
  };

  const checkEmail = $veld => {
    if (valueMissing($veld) !== ``) {
      $veld.parentNode.querySelector(`.error`).innerHTML = valueMissing($veld);
    } else {
      $veld.parentNode.querySelector(`.error`).innerHTML = typeMismatch($veld);
    }
  };

  const onEmailChange = e => {
    const $veld = e.currentTarget;
    // checkEmail($veld);
    if (e.type === `blur`) {
      checkEmail($veld);
    } else {
      if ($veld.validity.valid) {
        $veld.parentNode.querySelector(`.error`).innerHTML = ``;
      }
    }
  };

  const typeMismatch = $veld => {
    if ($veld.validity.typeMismatch === true) {
      return `Oei, dit e-mail adres klopt niet..`;
    }
    return ``;
  };

  const valueMissing = $veld => {
    if ($veld.validity.valueMissing === true) {
      return `Oei, je hebt niks ingevuld!`;
    }
    return ``;
  };

  const init = () => {
    // fetchDate();
    $form.noValidate = true;
    $form.addEventListener(`submit`, onSubmit);
    document.getElementById(`email`).addEventListener(`blur`, onEmailChange);
    document.getElementById(`email`).addEventListener(`input`, onEmailChange);
  };

  init();
})();
