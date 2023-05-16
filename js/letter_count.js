const textarea = document.getElementById("textarea");
const charCountDisplay = document.getElementById("letterCount");

textarea.addEventListener("input", () => {
  const text = textarea.value;
  const charCount = text.length;

  charCountDisplay.textContent = charCount + " /800";

  // Ustaw tutaj maksymalną liczbę znaków
  const maxChars = 1000;
  if (charCount > maxChars) {
    textarea.value = text.slice(0, maxChars);
  }
});