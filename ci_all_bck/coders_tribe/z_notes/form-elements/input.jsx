// input{text, number, password, email, hidden}
const Input = ({name, type, label, value, validationText, errorCallback}) => {
  // function to check type validation error
  return (
    <React.Fragment>
      <label class="w3-text-teal"><b>{label}</b></label>
      <input class="w3-input w3-border w3-light-grey" name={name} value={value} type={type}></input>
      <p class="w3-small">{validationText}</p>
    </React.Fragment>
  );
}