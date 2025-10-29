export const screenResize = (timer: number = 250, callback: Function) => {
  let executionDelay: ReturnType<typeof setTimeout>;
  let screenWidth: number = window.innerWidth;
  window.addEventListener("resize", (): void => {
    clearTimeout(executionDelay);
    let screenSize: number = window.innerWidth;
    executionDelay = setTimeout((): void => {
      if (screenWidth === screenSize) return
      screenWidth = screenSize;
      callback();
    }, timer);
  });
};
