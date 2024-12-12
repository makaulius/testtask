export function countdown(targetDate) {
  return {
      timeLeft: 'The offer expires soon',
      intervalId: null,

      startCountdown() {
          if (!targetDate) return;

          const endTime = new Date(targetDate).getTime();

          this.updateTimeLeft(endTime);
          
          this.intervalId = setInterval(() => {
              this.updateTimeLeft(endTime);
          }, 1000);
      },

      updateTimeLeft(endTime) {
          const now = new Date().getTime();
          const timeDifference = endTime - now;

          if (timeDifference <= 0) {
              clearInterval(this.intervalId);
              this.timeLeft = 'The offer has expired!';
              return;
          }

          const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
          const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

          if (days > 0) {
              this.timeLeft = `${days}d ${hours}h ${minutes}m ${seconds}s`;
          } else if (hours > 0) {
              this.timeLeft = `${hours}h ${minutes}m ${seconds}s`;
          } else if (minutes > 0) {
              this.timeLeft = `${minutes}m ${seconds}s`;
          } else {
              this.timeLeft = `${seconds}s`;
          }
      }
  }
}